<?php
// warning
// in this file name of routes and route links in result become with admin suff
// home is become admin.home or /home is become /admin/home

use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FavoriteController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;

Route::post("logout", [AdminLoginController::class, "logout"])->name("logout");
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

Route::get("home", [AdminController::class, "index"])->name("home");
Route::resource("users", UserController::class);
Route::patch("users/{user}/block", [UserController::class, "block"])->name(
    "users.block"
);
Route::resource("products", ProductController::class);
Route::resource("categories", CategoryController::class);
Route::get("transactions", [TransactionController::class, "index"])->name(
    "transactions.index"
);
Route::get("orders", [OrderController::class, "index"])->name("orders.index");
Route::get("favorites", [FavoriteController::class, "index"])->name(
    "favorites.index"
);
Route::fallback(function () {
    return view("Admin.http-errors.404");
});

// Route::resource("products", [ProductController::class]);
// Route::resource("users", "UserController");
// Route::get('users/{user}/card', 'Admin\UserController@card')->name('users.card');
//
