<?php
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['guest']], function () {
    Route::get("/", "PageController@login")->name('login');
    Route::post("/login", "AuthController@ceklogin");

});


Route::group(['middleware' => ['auth']], function () {
    Route::get("/home", "PageController@home");
    Route::get("/helm", "PageController@helm");

    Route::get("/helm/form-add", "PageController@addhelm");
    Route::post("/save", "PageController@savehelm");

    Route::get("/logout", "AuthController@ceklogout");
    Route::get("/user", "PageController@edituser");
    Route::post("/updateuser", "PageController@updateuser");


    Route::get("/form-edit/{id}", "PageController@edithelm");
    Route::put("/update/{id}", "PageController@updatehelm");
    Route::get("/delete/{id}", "PageController@deletehelm");
});












