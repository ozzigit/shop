<?php
namespace App\Services\Web;

use App\Models\Cart;
use App\Repositories\CartRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AdminService
{
    private CartRepository $repository;

    public function __construct(CartRepository $repository)
    {
        $this->repository = $repository;
    }
}
