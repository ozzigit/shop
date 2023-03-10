<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\StoreFavoriteUserRequest;
use App\Http\Requests\Web\UpdateFavoriteUserRequest;
use App\Models\FavoriteUser;

class FavoriteUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFavoriteUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FavoriteUser $favoriteUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FavoriteUser $favoriteUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoriteUserRequest $request, FavoriteUser $favoriteUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FavoriteUser $favoriteUser)
    {
        //
    }
}