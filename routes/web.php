<?php

// use Illuminate\Support\Facades\Auth;
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

Route::prefix("admin")->group(function () {
    Route::get("login", "Auth\AdminLoginController@login")->name(
        "admin.auth.login"
    );
    Route::post("login", "Auth\AdminLoginController@loginAdmin")->name(
        "admin.auth.loginAdmin"
    );
    Route::post("logout", "Auth\AdminLoginController@logout")->name(
        "admin.auth.logout"
    );
});
Route::group(["middleware" => ["auth:admin"]], function () {
    Route::get("admin/", function () {
        return view("admin.dashboard");
    })->name("admin.dashboard");
});
Route::get("/", function () {
    return view("welcome");
});
Auth::routes();

Route::get("/home", [
    App\Http\Controllers\HomeController::class,
    "index",
])->name("home");
