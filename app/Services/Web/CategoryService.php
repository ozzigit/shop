<?php
namespace App\Services\Web;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CategoryService
{
    private CategoryRepository $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }
}
