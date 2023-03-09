<?php
namespace App\Services\Admin;

use App\Models\Admin;
use App\Repositories\AdminRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AdminService
{
    private AdminRepository $repository;

    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
    }

}
