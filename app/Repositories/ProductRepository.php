<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * Get all products.
     */
    public function getAll(): Collection
    {
        return Product::with('category')->get();
    }

    /**
     * Get active products.
     */
    public function getActive(): Collection
    {
        return Product::where('status', 'active')->with('category')->get();
    }

    /**
     * Get featured products.
     */
    public function getFeatured(int $limit = 10): Collection
    {
        return Product::where('status', 'active')
            ->where('featured', true)
            ->with('category')
            ->take($limit)
            ->get();
    }

    /**
     * Get products by category.
     */
    public function getByCategory(int $categoryId, int $limit = null): Collection
    {
        $query = Product::where('status', 'active')
            ->where('category_id', $categoryId)
            ->with('category');

        if ($limit) {
            $query->take($limit);
        }

        return $query->get();
    }

    /**
     * Find product by ID.
     */
    public function findById(int $id): ?Product
    {
        return Product::with('category')->find($id);
    }

    /**
     * Find product by slug.
     */
    public function findBySlug(string $slug): ?Product
    {
        return Product::where('slug', $slug)->with('category')->first();
    }

    /**
     * Create a new product.
     */
    public function create(array $data): Product
    {
        return Product::create($data);
    }

    /**
     * Update an existing product.
     */
    public function update(Product $product, array $data): Product
    {
        $product->update($data);
        return $product->fresh();
    }

    /**
     * Delete a product.
     */
    public function delete(Product $product): bool
    {
        return $product->delete();
    }

    /**
     * Search products.
     */
    public function search(string $query): Collection
    {
        return Product::where('status', 'active')
            ->where(function ($q) use ($query) {
                $q->where('name_uz', 'like', "%{$query}%")
                  ->orWhere('name_en', 'like', "%{$query}%")
                  ->orWhere('description_uz', 'like', "%{$query}%")
                  ->orWhere('description_en', 'like', "%{$query}%");
            })
            ->with('category')
            ->get();
    }
}