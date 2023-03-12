<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\ProductRequest;
use App\Models\Product;
use App\Models\Review;
use App\Repositories\ProductRepository;
use App\Services\Web\ProductService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(ProductService $service, ProductRepository $repository)
    {
        $review=Review::find(42);
        dump($review);
        $product=Product::find(682);
        // $product->reviews()->save($review);
        $review->delete();
        // $review->delete();
        // $product->reviews()->delete($review);
        // dump($repository->one(683)->sync([1,2,3]));
        return "fdasjflkadsfas";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
