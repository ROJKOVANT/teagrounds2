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
//Route::get('/OpenNews/{id}', [App\Http\Controllers\NewsesController::class, 'new'])->name('OpenNews');/*страница с новостью*/
Route::get('/OpenNews', [App\Http\Controllers\NewsesController::class, 'random'])->name('OpenNews');/*вывод рандомных новостей*/


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




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function (){
    return view('admin');


})->middleware('admin');

/*клиенты*/
Route::get('/admin',[App\Http\Controllers\InfoUserController::class, 'allInfo'])->name('admin');/*вывод клиентов*/
Route::get('/admin/{id}/delete',[App\Http\Controllers\InfoUserController::class, 'deleteInfo'])->name('admin.deleteInfo');/*удаление клиентов*/

/*Категории статьи*/
Route::get('/paragraphs', [App\Http\Controllers\ParagraphsController::class, 'index'])->name('paragraphs');/*страница с категориями*/
Route::get('/paragraph/edit/{id}', [App\Http\Controllers\ParagraphsController::class, 'edit'])->name('paragraph.edit');
Route::get('/paragraph/delete/{id}', [App\Http\Controllers\ParagraphsController::class, 'destroy'])->name('paragraph.delete');
Route::get('/paragraph/create', [App\Http\Controllers\ParagraphsController::class, 'create'])->name('paragraph.create');
Route::post('/paragraph/store', [App\Http\Controllers\ParagraphsController::class, 'store'])->name('paragraph.store');
Route::post('/paragraph/update/{id}', [App\Http\Controllers\ParagraphsController::class, 'update'])->name('paragraph.update');

/*Категории товары*/
Route::get('/categorys', [App\Http\Controllers\CategorysController::class, 'index'])->name('categorys');/*страница с категориями*/
Route::get('/category/edit/{id}', [App\Http\Controllers\CategorysController::class, 'edit'])->name('category.edit');
Route::get('/category/delete/{id}', [App\Http\Controllers\CategorysController::class, 'destroy'])->name('category.delete');
Route::get('/category/create', [App\Http\Controllers\CategorysController::class, 'create'])->name('category.create');
Route::post('/category/store', [App\Http\Controllers\CategorysController::class, 'store'])->name('category.store');
Route::post('/category/update/{id}', [App\Http\Controllers\CategorysController::class, 'update'])->name('category.update');

/*Новости*/
Route::get('/adminBlog', function () {
    return view('adminBlog');
});/*все новости*/
Route::get('/news/index/{id}', [App\Http\Controllers\NewsesController::class, 'news'])->name('news.index');/*страница с новостью*/
//Route::get('/news/index/{id}', [App\Http\Controllers\NewsesController::class, 'random'])->name('news.index');/*вывод рандомных новостей*/
Route::get('/news/edit/{id}', [App\Http\Controllers\NewsesController::class, 'edit'])->name('news.edit');/*изменить новость*/
Route::post('/news/update/{id}', [App\Http\Controllers\NewsesController::class, 'update'])->name('news.update');/*сохранить изменение новости*/
Route::get('/adminBlog/delete/{id}', [App\Http\Controllers\NewsesController::class, 'destroy'])->name('adminBlog.delete');/*удалить новость*/
Route::get('/adminBlogAdd', [App\Http\Controllers\NewsesController::class, 'create'])->name('adminBlogAdd');/*создать новость*/
Route::post('/adminBlogAdd/store', [App\Http\Controllers\NewsesController::class, 'store'])->name('adminBlogAdd.store');/*занести данные новости*/

/*товары*/
Route::get('/adminTovar', function () {
    return view('adminTovar');
});/*все товары*/
Route::get('/towars/index/{id}', [App\Http\Controllers\TowarsController::class, 'towars'])->name('towars.index');/*страница с товаром*/
Route::get('/towars/edit/{id}', [App\Http\Controllers\TowarsController::class, 'edit'])->name('towars.edit');/*изменить товар*/
Route::post('/towars/update/{id}', [App\Http\Controllers\TowarsController::class, 'update'])->name('towars.update');/*сохранить изменение товара*/
Route::get('/adminTovar/delete/{id}', [App\Http\Controllers\TowarsController::class, 'destroy'])->name('adminTovar.delete');/*удалить товар*/
Route::get('/adminTovarAdd', [App\Http\Controllers\TowarsController::class, 'create'])->name('adminTovarAdd');/*создать товар*/
Route::post('/adminTovarAdd/store', [App\Http\Controllers\TowarsController::class, 'store'])->name('adminTovarAdd.store');/*занести данные товар*/


/*корзина*/
Route::post('/add_cart/{id}', [App\Http\Controllers\HomeController::class, 'add_cart'])->name('add_cart');/*добавить в корзину*/
Route::get('/carts', [App\Http\Controllers\HomeController::class, 'carts'])->name('carts.index');/*корзина с товарами*/
Route::get('/carts/delete{id}', [App\Http\Controllers\HomeController::class, 'cart_destroy'])->name('carts.delete');/*добавить в корзину*/

/*Оформление заказов*/
Route::get('/cash_order', [App\Http\Controllers\HomeController::class, 'cash_order'])->name('cash_order');/*корзина с товарами*/

Route::get('/orders', [App\Http\Controllers\HomeController::class, 'orders'])->name('orders.index');/*вывод всех заказов*/
Route::post('/delivered/{id}', [App\Http\Controllers\HomeController::class, 'delivered'])->name('orders.index');/*вывод всех заказов*/
Route::post('/delivered/update/{id}', [App\Http\Controllers\HomeController::class, 'update_delivered'])->name('orders.index');/*сохранить изменение товара*/
