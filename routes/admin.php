<?php

use Illuminate\Support\Facades\Route;

Route::post("logout", [AdminLoginController::class, "logout"])->name(
    "admin.auth.logout"
);
Route::get("/password/reset", [
    AdminLoginController::class,
    "showLinkRequestForm",
])->name("admin.password.request");
Route::post("/password/email", [
    AdminLoginController::class,
    "sendResetLinkEmail",
])->name("admin.password.email");
Route::post("/password/reset", [AdminLoginController::class, "reset"])->name(
    "admin.password.update"
);

Route::resource("products", "Admin\ProductsController");
Route::resource("users", "Admin\UserController");
// Route::get('users/{user}/card', 'Admin\UserController@card')->name('users.card');
