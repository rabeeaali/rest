<?php

namespace App\Http\Controllers\Restaurant\Products;

use App\Models\Product;
use App\Traits\HandleFileUpload;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Services\Products\StoreProductService;
use App\Services\Products\DeleteProductService;
use App\Services\Products\UpdateProductService;
use App\Http\Requests\Restaurant\ProductRequest;

class ProductController extends Controller
{
    use HandleFileUpload;

    public function index(ProductRepository $product)
    {
        return view('restaurants.products.index', [
            'products' => $product->get()
        ]);
    }

    public function create()
    {
        return view('restaurants.products.create');
    }

    public function store(ProductRequest $request)
    {
        return app(StoreProductService::class)->handle($request->validated());
    }

    public function edit(Product $product)
    {
        return view('restaurants.products.update', compact('product'));
    }

    public function update($productId, ProductRequest $request)
    {
        return app(UpdateProductService::class)->handle($request->validated(), $productId);
    }

    public function destroy($productId)
    {
        return app(DeleteProductService::class)->handle($productId);
    }
}
