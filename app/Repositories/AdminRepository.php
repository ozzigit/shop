<?php
namespace App\Repositories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AdminRepository extends Repository
{
    public function __construct(Admin $model)
    {
        parent::__construct($model);
    }

}
