<?php
namespace App\Services\Web;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ProductService
{
    private ProductRepository $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    //just for testing
    public function getAll()
    {
        return $this->repository->all();
    }
    public function getOne(int $id)
    {
        return $this->repository->one($id);
    }
    public function getModel()
    {
        return $this->repository->getModel();
    }
}
