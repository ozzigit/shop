<?php
namespace App\Services\Web;

use App\Models\Transaction;
use App\Repositories\TransactionRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class TransactionService
{
    private TransactionRepository $repository;

    public function __construct(TransactionRepository $repository)
    {
        $this->repository = $repository;
    }

}
