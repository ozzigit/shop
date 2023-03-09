<?php
namespace App\Repositories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ReviewRepository extends Repository
{
    public function __construct(Review $model)
    {
        parent::__construct($model);
    }

}
