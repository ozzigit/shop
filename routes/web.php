<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Web\ReviewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("admin/login", [AdminLoginController::class, "login"])->name(
    "admin.auth.login"
);
Route::post("admin/login", [AdminLoginController::class, "loginAdmin"])->name(
    "admin.auth.login-admin"
);

Route::get("/", function () {
    return view("welcome");
});
Auth::routes();

Route::get("/home", [
    App\Http\Controllers\HomeController::class,
    "index",
])->name("user.home");
