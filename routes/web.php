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

//test-----------------------------------
/*
"index",
"show",
"create",
"store",
"update",
"destroy",
*/
Route::get("/reviews/test", [ReviewController::class, "test"]);
Route::resource("reviews", ReviewController::class)->only(["index", "show"]);
//or
Route::resource("reviews", ReviewController::class)->except([
    "create",
    "store",
    "update",
    "destroy",
]);

//test-----------------------------------

Route::prefix("admin")->group(function () {
    Route::get("login", [AdminLoginController::class, "login"])->name(
        "admin.auth.login"
    );
    Route::post("login", [AdminLoginController::class, "loginAdmin"])->name(
        "admin.auth.loginAdmin"
    );
    Route::post("logout", [AdminLoginController::class, "logout"])->name(
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
