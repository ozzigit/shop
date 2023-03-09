<?php
namespace App\Repositories;

use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class OrderProductRepository extends Repository
{
    public function __construct(OrderProduct $model)
    {
        parent::__construct($model);
    }

}
