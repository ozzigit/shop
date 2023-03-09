<?php
namespace App\Repositories;

use App\Models\CategoryProduct;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CategoryProductRepository extends Repository
{
    public function __construct(CategoryProduct $model)
    {
        parent::__construct($model);
    }

}
