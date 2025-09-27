<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $categories = $this->categoryService->getPaginatedCategories($request);
        
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        try {
            $this->categoryService->createCategory($request->validated());
            
            return redirect()
                ->route('admin.categories.index')
                ->with('success', 'Kategoriya muvaffaqiyatli yaratildi');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Kategoriya yaratishda xatolik yuz berdi: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): View
    {
        $category->load(['products' => function ($query) {
            $query->active()->latest()->take(10);
        }]);
        
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        try {
            $this->categoryService->updateCategory($category, $request->validated());
            
            return redirect()
                ->route('admin.categories.index')
                ->with('success', 'Kategoriya muvaffaqiyatli yangilandi');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Kategoriya yangilashda xatolik yuz berdi: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        try {
            $this->categoryService->deleteCategory($category);
            
            return redirect()
                ->route('admin.categories.index')
                ->with('success', 'Kategoriya muvaffaqiyatli o\'chirildi');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Kategoriya o\'chirishda xatolik yuz berdi: ' . $e->getMessage());
        }
    }

    /**
     * Toggle category status.
     */
    public function toggleStatus(Category $category): RedirectResponse
    {
        try {
            $this->categoryService->toggleStatus($category);
            
            $status = $category->status ? 'faollashtirildi' : 'o\'chirildi';
            
            return redirect()
                ->back()
                ->with('success', "Kategoriya holati {$status}");
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Kategoriya holatini o\'zgartirishda xatolik yuz berdi: ' . $e->getMessage());
        }
    }
}
