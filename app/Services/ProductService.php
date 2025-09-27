<?php

namespace App\Services;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductService
{
    protected ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Get paginated products with search and filters.
     */
    public function getPaginatedProducts(Request $request, int $perPage = 10): LengthAwarePaginator
    {
        $query = Product::with('category');

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->search($search);
        }

        // Category filter
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->get('category_id'));
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->get('status'));
        }

        // Featured filter
        if ($request->filled('featured')) {
            $query->featured();
        }

        // Stock filter
        if ($request->filled('in_stock')) {
            $query->inStock();
        }

        return $query->paginate($perPage);
    }

    /**
     * Create a new product.
     */
    public function createProduct(array $data): Product
    {
        // Handle image uploads
        $data = $this->handleImageUploads($data);

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name_uz'] ?? $data['name_en']);
        }

        // Generate SKU if not provided
        if (empty($data['sku'])) {
            $data['sku'] = $this->generateSKU($data);
        }

        return $this->productRepository->create($data);
    }

    /**
     * Update an existing product.
     */
    public function updateProduct(Product $product, array $data): Product
    {
        // Handle image uploads and deletions
        $data = $this->handleImageUploads($data, $product);

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name_uz'] ?? $data['name_en']);
        }

        return $this->productRepository->update($product, $data);
    }

    /**
     * Delete a product.
     */
    public function deleteProduct(Product $product): bool
    {
        // Delete associated images
        $this->deleteProductImages($product);

        return $this->productRepository->delete($product);
    }

    // Legacy methods for backward compatibility
    public function store($request)
    {
        $requestData = $request->all();
        return $this->createProduct($requestData);
    }

    public function update($id, $request)
    {
        $product = Product::findOrFail($id);
        $requestData = $request->all();
        return $this->updateProduct($product, $requestData);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        return $this->deleteProduct($product);
    }

    // extra functions
    public function unlink_file($id, $img)
    {
        $product = Product::find($id);
        if (isset($product->$img) && file_exists(public_path('/images/' . $product->$img))) {
            unlink(public_path('/images/' . $product->$img));
        }
    }

    public function upload_file($i)
    {

        $file = request()->file('img' . $i);
        $imageName = time() . '-' . $file->getClientOriginalName();
        $file->move('images/', $imageName);
        $requestData['img' . $i] = $imageName;
    }

    public function upload($request)
    {
        if ($request->hasFile('upload')) {
            $fileName = time() . '-' . $request->file('upload')->getClientOriginalName();
            $request->file('upload')->move('images/products/', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/products/' . $fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            return $response;
        }
    }

    /**
     * Toggle product status.
     */
    public function toggleStatus(Product $product): Product
    {
        return $this->productRepository->update($product, [
            'status' => !$product->status
        ]);
    }

    /**
     * Get featured products.
     */
    public function getFeaturedProducts(int $limit = 10)
    {
        return $this->productRepository->getFeatured($limit);
    }

    /**
     * Get products by category.
     */
    public function getProductsByCategory(int $categoryId, int $limit = null)
    {
        return $this->productRepository->getByCategory($categoryId, $limit);
    }

    /**
     * Increment product views.
     */
    public function incrementViews(Product $product): void
    {
        $product->increment('views');
    }

    /**
     * Handle image uploads for product.
     */
    protected function handleImageUploads(array $data, Product $product = null): array
    {
        $imageFields = ['img1', 'img2', 'img3', 'img4', 'img5'];

        foreach ($imageFields as $field) {
            if (isset($data[$field]) && $data[$field]) {
                // Delete old image if updating
                if ($product && $product->$field) {
                    $this->deleteImage($product->$field);
                }
                
                $data[$field] = $this->handleImageUpload($data[$field], 'products');
            }
        }

        return $data;
    }

    /**
     * Handle single image upload.
     */
    protected function handleImageUpload($image, string $folder = 'products'): string
    {
        $filename = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs($folder, $filename, 'public');
        
        return $path;
    }

    /**
     * Delete image from storage.
     */
    protected function deleteImage(string $imagePath): void
    {
        if (Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }

    /**
     * Delete all product images.
     */
    protected function deleteProductImages(Product $product): void
    {
        $imageFields = ['img1', 'img2', 'img3', 'img4', 'img5'];

        foreach ($imageFields as $field) {
            if ($product->$field) {
                $this->deleteImage($product->$field);
            }
        }
    }

    /**
     * Generate SKU for product.
     */
    protected function generateSKU(array $data): string
    {
        $prefix = 'PRD';
        $categoryId = $data['category_id'] ?? '00';
        $timestamp = now()->format('ymd');
        $random = strtoupper(Str::random(3));

        return "{$prefix}-{$categoryId}-{$timestamp}-{$random}";
    }
}
