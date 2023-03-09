<?php
namespace App\Repositories;

use App\Models\Favorite;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FavoriteRepository extends Repository
{
    public function __construct(Favorite $model)
    {
        parent::__construct($model);
    }

}
