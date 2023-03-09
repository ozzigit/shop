<?php
namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductRepository extends Repository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

}
