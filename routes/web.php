<?php

use App\Http\Controllers\admin\Admincontroller;
use App\Http\Controllers\admin\Homecontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

route::group(['prefix' => 'admin'], function () {

    route::group(['middlewere' => 'admin.guest'], function () {
        route::get('/login', [Admincontroller::class, 'index'])->name('admin.login');
        route::post('/authenticate', [Admincontroller::class, 'authenticate'])->name('admin.authenticate');
    });


    route::group(['middlewere' => 'admin.auth'], function () {
        route::get('/dashboard', [Homecontroller::class, 'index'])->name('admin.dashboard');
        route::get('/logout', [Homecontroller::class, 'logout'])->name('admin.logout');
    });
});
