<?php

namespace App\Services\Products;

use App\Models\Product;
use App\Traits\HandleFileUpload;
use App\Repositories\ProductRepository;

class DeleteProductService
{
    use HandleFileUpload;

    public function __construct(
        protected ProductRepository $product
    ) {
    }

    public function handle($productId)
    {
        $product = $this->product->findById($productId);

        $this->deleteOldFile(Product::PATH, $product->image);

        $product->delete();

        return redirect()->route('restaurant.products.index')
            ->with('success', 'Product deleted successfully');
    }
}
