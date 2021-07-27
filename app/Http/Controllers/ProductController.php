<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::with('category')->get());
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());

        return response()->json([
           'message' => 'Product created successfully',
           'data' => $this->getProductResource($product->id),
        ], 200);
    }

    public function show(Product $product)
    {
        return $this->getProductResource($product->id);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return $this->getProductResource($product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully.'
        ], 201);
    }

    private function getProductResource($id)
    {
        return ProductResource::collection(Product::with('category')->where('id', $id)->get());
    }
}
