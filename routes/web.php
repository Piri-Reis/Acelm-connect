<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('login', function () {
    if(!Auth()->user()) {
        return view('backend.users.login.login');
    }else{
        return view('backend.dashboard.index');
    }
})->name('login');


Route::middleware(['auth'])->group(function(){
    Route::resource('user', UserController::class);

    Route::get('logout', function (){
        auth()->logout();
        return redirect('login');
    })->name('logout');

    Route::get('/', function (){
        return view('backend.dashboard.index');
    })->name('dashboard');
});




