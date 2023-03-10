<?php
namespace App\Services\Admin;

use App\Models\FavoriteUser;
use App\Repositories\FavoriteUserRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class FavoriteUserProductService
{
    private FavoriteUserRepository $repository;

    public function __construct(FavoriteUserRepository $repository)
    {
        $this->repository = $repository;
    }
}
