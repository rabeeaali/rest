<?php

namespace App\Http\Controllers\Restaurant\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Http\Requests\Restaurant\CategoryRequest;
use App\Services\Categories\StoreCategoryService;
use App\Services\Categories\DeleteCategoryService;
use App\Services\Categories\UpdateCategoryService;

class CategoryController extends Controller
{
    public function index(CategoryRepository $category)
    {
        return view('restaurants.categories.index', [
            'categories' => $category->get()
        ]);
    }

    public function create()
    {
        return view('restaurants.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        return app(StoreCategoryService::class)->handle($request->validated());
    }

    public function edit(Category $category)
    {
        return view('restaurants.categories.update', compact('category'));
    }

    public function update($categoryId, CategoryRequest $request)
    {
        return app(UpdateCategoryService::class)->handle($request->validated(), $categoryId);
    }

    public function destroy($categoryId)
    {
        return app(DeleteCategoryService::class)->handle($categoryId);
    }
}
