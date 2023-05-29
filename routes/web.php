<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');

Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('blog/detail/{id}', [PageController::class, 'blogDetail'])->name('blog');

Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::get('service', [PageController::class, 'service'])->name('service');
Route::get('service/detail/{id}', [PageController::class, 'serviceDetail'])->name('service');

Route::get('project', [PageController::class, 'project'])->name('project');
