<?php
namespace App\Services\Web;

use App\Models\Order;
use App\Repositories\OrderRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class OrderService
{
    private OrderRepository $repository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }
}
