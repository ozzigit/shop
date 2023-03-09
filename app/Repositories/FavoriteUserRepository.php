<?php
namespace App\Repositories;

use App\Models\FavoriteUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FavoriteUserRepository extends Repository
{
    public function __construct(FavoriteUser $model)
    {
        parent::__construct($model);
    }
}
