<?php

namespace App\Services\Categories;

use App\Models\Category;
use App\Traits\HandleFileUpload;
use App\Repositories\CategoryRepository;

class DeleteCategoryService
{
    use HandleFileUpload;

    public function __construct(
        protected CategoryRepository $category
    ) {
    }

    public function handle($categoryId)
    {
        $category = $this->category->findById($categoryId);

        $this->deleteOldFile(Category::PATH, $category->image);

        $category->delete();

        return redirect()->route('restaurant.categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
