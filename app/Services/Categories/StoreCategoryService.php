<?php

namespace App\Services\Categories;

use App\Models\Category;
use App\Traits\HandleFileUpload;

class StoreCategoryService
{
    use HandleFileUpload;

    public function __construct(
        protected Category $category
    ) {
    }

    public function handle($request)
    {
        $this->category->create(array_merge($request, [
            'image' => $this->fileUpload(Category::PATH, $request['image']),
        ]));

        return redirect()->route('restaurant.categories.index')
            ->with('success', 'Category created successfully');
    }
}
