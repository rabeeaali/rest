<?php

namespace App\Services\Products;

use App\Models\Product;
use App\Traits\HandleFileUpload;
use App\Repositories\ProductRepository;

class UpdateProductService
{
    use HandleFileUpload;

    public function __construct(
        protected ProductRepository $product
    ) {
    }

    public function handle($request, $productId)
    {
        $product = $this->productRepository->findById($productId);

        if ($product->isNewImageExistInRequest()) {
            $this->deleteOldFile(Product::PATH, $product->image);
        }

        $product->update(array_merge($request, [
            'image' => $product->isNewImageExistInRequest()
                ? $this->fileUpload(Product::PATH, $request['image'])
                : $product->image,
        ]));

        return redirect()->route('restaurant.products.index')
            ->with('success', 'Product updated successfully');
    }
}
