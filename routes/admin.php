<?php
// warning
// in this file name of routes and route links in result become with admin suff
// home is become admin.home or /home is become /admin/home

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::post("logout", [AdminLoginController::class, "logout"])->name(
    "auth.logout"
);
Route::get("/password/reset", [
    AdminLoginController::class,
    "showLinkRequestForm",
])->name("password.request");
Route::post("/password/email", [
    AdminLoginController::class,
    "sendResetLinkEmail",
])->name("password.email");
Route::post("/password/reset", [AdminLoginController::class, "reset"])->name(
    "password.update"
);


Route::get("/home", [
    AdminController::class,
    "index",
])->name("home");





// Route::resource("products", [ProductController::class]);
// Route::resource("users", "UserController");
// Route::get('users/{user}/card', 'Admin\UserController@card')->name('users.card');
