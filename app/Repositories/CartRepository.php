<?php
namespace App\Repositories;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CartRepository extends Repository
{
    public function __construct(Cart $model)
    {
        parent::__construct($model);
    }

}
