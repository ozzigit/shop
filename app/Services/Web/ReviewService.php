<?php
namespace App\Services\Web;

use App\Models\Review;
use App\Repositories\ReviewRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ReviewService
{
    private ReviewRepository $repository;

    public function __construct(ReviewRepository $repository)
    {
        $this->repository = $repository;
    }
}
