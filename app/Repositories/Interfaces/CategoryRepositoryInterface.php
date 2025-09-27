<?php

namespace App\Repositories\Interfaces;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
    /**
     * Get all categories.
     */
    public function getAll(): Collection;

    /**
     * Get active categories.
     */
    public function getActive(): Collection;

    /**
     * Find category by ID.
     */
    public function findById(int $id): ?Category;

    /**
     * Find category by slug.
     */
    public function findBySlug(string $slug): ?Category;

    /**
     * Create a new category.
     */
    public function create(array $data): Category;

    /**
     * Update an existing category.
     */
    public function update(Category $category, array $data): Category;

    /**
     * Delete a category.
     */
    public function delete(Category $category): bool;

    /**
     * Get categories with products count.
     */
    public function getWithProductsCount(): Collection;
}