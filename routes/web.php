<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;

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

Route::get('language/{language}', function ($language) {
    Session()->put('locale', $language);

    return redirect()->back();
})->name('language');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard',);
})->name('dashboard');

Route::get('/test', function () {
    return Inertia::render('Test');
});

Route::prefix('admin')->name('admin.')
    ->middleware(['auth:sanctum','verified'])
    ->group(function (){
    Route::get('dashboard',[AdminDashboardController::class,'index'])->name('dashboard.index');

    // Route::resource('admins',AdminController::class)
    //     ->parameters(['admins'=>'user'])
    //     ->only(['index','update']);

    Route::patch('users/activate/{user}',[UserController::class,'activate'])->name('users.activate');
    Route::patch('users/inactivate/{user}',[UserController::class,'inactivate'])->name('users.inactivate');
    Route::resource('users',UserController::class)
        ->except(['create','show','edit']);

    Route::resource('permissions',PermissionController::class)
        ->except(['create','show','edit']);

    Route::resource('roles',RoleController::class)
        ->except(['create','show','edit']);
});





