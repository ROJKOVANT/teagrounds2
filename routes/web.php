<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
});



Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/OpenNews', function () {
    return view('OpenNews');
});

Route::get('/OpenTovar', function () {
    return view('OpenTovar');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/shop', function () {
    return view('shop');
});
/*роутеры для админки*/
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/adminTovarAdd', function () {
    return view('adminTovarAdd');
});
Route::get('/adminTovarDelete', function () {
    return view('adminTovarDelete');
});
Route::get('/adminBlogDelete', function () {
    return view('adminBlogDelete');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function (){
    return view('admin');


})->middleware('admin');

Route::get('/admin',[App\Http\Controllers\InfoUserController::class, 'allInfo'])->name('admin');
Route::get('/admin/{id}/delete',[App\Http\Controllers\InfoUserController::class, 'deleteInfo'])->name('admin.deleteInfo');
