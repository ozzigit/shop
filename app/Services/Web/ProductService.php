<?php
namespace App\Services\Web;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AdminService
{
    private ProductRepository $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }
}
