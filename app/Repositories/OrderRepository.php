<?php
namespace App\Repositories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class OrderRepository extends Repository
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

}
