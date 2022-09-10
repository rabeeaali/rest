<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function __construct(
        protected Product $product
    ) {
    }

    /**
     * Get all prroducts
     *
     * @return void
     */
    public function get()
    {
        return Product::query()
            ->search()
            ->orderByDesc('id')
            ->cursorPaginate();
    }

    /**
     * Find Product data By Id
     *
     * @param  mixed $productId
     * @return object
     */
    public function findById($productId)
    {
        return $this->product->findOrFail($productId);
    }
}
