<?php
namespace App\Services\Web;

use App\Models\Favorite;
use App\Repositories\FavoriteRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class FavoriteService
{
    private FavoriteRepository $repository;

    public function __construct(FavoriteRepository $repository)
    {
        $this->repository = $repository;
    }
}
