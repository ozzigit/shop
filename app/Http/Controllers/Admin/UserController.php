<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\Admin\UserService;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserService $service)
    {
        $users = $service->getAll();

        return view("Admin.users.users-table", ["users" => $users]);
    }

    public function block(User $user)
    {
        # code...
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'creation form here';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
