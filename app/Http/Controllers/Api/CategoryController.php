<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of categories.
     */
    public function index(): JsonResponse
    {
        $categories = Category::where('status', 'active')
            ->with(['products' => function ($query) {
                $query->where('status', 'active')->take(5);
            }])
            ->get();

        return response()->json([
            'success' => true,
            'data' => $categories
        ]);
    }

    /**
     * Display the specified category.
     */
    public function show(Category $category): JsonResponse
    {
        if ($category->status !== 'active') {
            return response()->json([
                'success' => false,
                'message' => 'Category not found'
            ], 404);
        }

        $category->load(['products' => function ($query) {
            $query->where('status', 'active');
        }]);

        return response()->json([
            'success' => true,
            'data' => $category
        ]);
    }
}