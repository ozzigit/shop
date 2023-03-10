<?php
namespace App\Services\Admin;

use App\Models\CartProduct;
use App\Repositories\CartProductRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CartProductService
{
    private CartProductRepository $repository;

    public function __construct(CartProductRepository $repository)
    {
        $this->repository = $repository;
    }
}
