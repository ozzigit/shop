<?php
namespace App\Services\Web;

use App\Models\OrderProduct;
use App\Repositories\OrderProductRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class OrderProductService
{
    private OrderProductRepository $repository;

    public function __construct(OrderProductRepository $repository)
    {
        $this->repository = $repository;
    }
}
