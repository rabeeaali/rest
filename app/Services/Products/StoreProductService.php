<?php

namespace App\Services\Products;

use App\Models\Product;
use App\Traits\HandleFileUpload;

class StoreProductService
{
    use HandleFileUpload;

    public function __construct(
        protected Product $product
    ) {
    }

    public function handle($request)
    {
        $this->product->create(array_merge($request, [
            'image' => $this->fileUpload($this->product::PATH, $request['image']),
        ]));

        return redirect()->route('restaurant.products.index')
            ->with('success', 'Product created successfully');
    }
}
