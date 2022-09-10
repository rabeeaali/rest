<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function __construct(
        protected Category $category
    ) {
    }

    /**
     * Get all categories
     *
     * @return void
     */
    public function get()
    {
        return $this->category->query()
            ->search()
            ->withCount('products')
            ->orderByDesc('id')
            ->cursorPaginate();
    }

    /**
     * Find category data By Id
     *
     * @param  mixed $categoryId
     * @return object
     */
    public function findById($categoryId)
    {
        return $this->category->findOrFail($categoryId);
    }
}
