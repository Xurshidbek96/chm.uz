<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{
    /**
     * Get all products.
     */
    public function getAll(): Collection;

    /**
     * Get active products.
     */
    public function getActive(): Collection;

    /**
     * Get featured products.
     */
    public function getFeatured(int $limit = 10): Collection;

    /**
     * Get products by category.
     */
    public function getByCategory(int $categoryId, int $limit = null): Collection;

    /**
     * Find product by ID.
     */
    public function findById(int $id): ?Product;

    /**
     * Find product by slug.
     */
    public function findBySlug(string $slug): ?Product;

    /**
     * Create a new product.
     */
    public function create(array $data): Product;

    /**
     * Update an existing product.
     */
    public function update(Product $product, array $data): Product;

    /**
     * Delete a product.
     */
    public function delete(Product $product): bool;

    /**
     * Search products.
     */
    public function search(string $query): Collection;
}