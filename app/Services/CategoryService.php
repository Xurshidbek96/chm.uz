<?php

namespace App\Services;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryService
{
    protected CategoryRepositoryInterface $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Get paginated categories with search and filters.
     */
    public function getPaginatedCategories(Request $request, int $perPage = 10): LengthAwarePaginator
    {
        $query = Category::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('name_uz', 'like', "%{$search}%")
                  ->orWhere('name_en', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->get('status'));
        }

        return $query->ordered()->paginate($perPage);
    }

    /**
     * Create a new category.
     */
    public function createCategory(array $data): Category
    {
        // Handle image upload
        if (isset($data['img'])) {
            $data['img'] = $this->handleImageUpload($data['img']);
        }

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name_uz'] ?? $data['name_en']);
        }

        return $this->categoryRepository->create($data);
    }

    /**
     * Update an existing category.
     */
    public function updateCategory(Category $category, array $data): Category
    {
        // Handle image upload
        if (isset($data['img'])) {
            // Delete old image
            if ($category->img) {
                $this->deleteImage($category->img);
            }
            $data['img'] = $this->handleImageUpload($data['img']);
        }

        // Generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name_uz'] ?? $data['name_en']);
        }

        return $this->categoryRepository->update($category, $data);
    }

    /**
     * Delete a category.
     */
    public function deleteCategory(Category $category): bool
    {
        // Delete associated image
        if ($category->img) {
            $this->deleteImage($category->img);
        }

        return $this->categoryRepository->delete($category);
    }

    /**
     * Toggle category status.
     */
    public function toggleStatus(Category $category): Category
    {
        return $this->categoryRepository->update($category, [
            'status' => !$category->status
        ]);
    }

    /**
     * Get active categories.
     */
    public function getActiveCategories()
    {
        return $this->categoryRepository->getActive();
    }

    /**
     * Get categories with product count.
     */
    public function getCategoriesWithProductCount()
    {
        return Category::withCount('products')->ordered()->get();
    }

    /**
     * Handle image upload.
     */
    protected function handleImageUpload($image): string
    {
        $filename = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('categories', $filename, 'public');
        
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
}