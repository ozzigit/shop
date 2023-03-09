<?php
namespace App\Repositories;

use App\Models\CartProduct;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CartProductRepository extends Repository
{
    public function __construct(CartProduct $model)
    {
        parent::__construct($model);
    }

}
