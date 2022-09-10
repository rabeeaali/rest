<?php

namespace App\Services\Categories;

use App\Models\Category;
use App\Traits\HandleFileUpload;
use App\Repositories\CategoryRepository;

class UpdateCategoryService
{
    use HandleFileUpload;

    public function __construct(
        protected CategoryRepository $category
    ) {
    }

    public function handle($request, $categoryId)
    {
        $category = $this->category->findById($categoryId);

        if (isNewImageExistInRequest()) {
            $this->deleteOldFile(Category::PATH, $category->image);
        }

        $category->update(array_merge($request, [
            'image' => isNewImageExistInRequest()
                ? $this->fileUpload(Category::PATH, $request['image'])
                : $category->image,
        ]));

        return redirect()->route('restaurant.categories.index')
            ->with('success', 'Category updated successfully');
    }
}
