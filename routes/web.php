<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TowarsController;
use App\Models\Towar;
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
Route::get('/', [App\Http\Controllers\NewsesController::class, 'randomnews'])->name('welcome');/*вывод рандомных новостей*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
});



Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/catalog/{id}', [App\Http\Controllers\TowarsController::class, 'index'])->name('catalog');/*товары по категории*/
//Route::get('/catalog/{id}', [App\Http\Controllers\TowarsController::class, 'categories'])->name('catalog');/*товары по категории*/

//Route::get('/catalog/{id}', [\App\Http\Controllers\TowarsController::class, 'filter'])->name('catalog');

//Route::get('/blog', function () {
//    return view('blog');
//});
Route::get('/blog', [App\Http\Controllers\NewsesController::class, 'all'])->name('blog');/*новости по категории*/
Route::get('/blog/{id}', [App\Http\Controllers\NewsesController::class, 'index'])->name('blog');/*новости по категории*/


Route::get('/OpenNews/{id}', [App\Http\Controllers\NewsesController::class, 'new'])->name('OpenNews');/*страница с новостью*/

Route::get('/OpenTovar/{id}', [App\Http\Controllers\TowarsController::class, 'towar'])->name('OpenTovar');/*страница с новостью*/

//Route::get('/product', function () {
//    return view('product');
//});


//Route::get('/history', function () {
//   return view('history');
//});
Route::get('/history', [App\Http\Controllers\HomeController::class, 'producthistory'])->name('history');/*вывод заказов в истории которые пришли*/
//Route::get('/podarochistory', [App\Http\Controllers\GiftController::class, 'podarochistory'])->name('history');/*вывод подарков в истории которые пришли*/

//----------------
// Статус на получен
Route::patch('/product/status/{id}', [HomeController::class, 'setStatus'])->name('statusEnd');
Route::patch('/product/status/{id}', [\App\Http\Controllers\GiftController::class, 'setStatus'])->name('statusEnd');
//------------------

Route::get('/help', function () {
    return view('help');
});
Route::get('/shop', function () {
    $towarsall = Towar::all();
    return view('shop', compact('towarsall'));
});
Route::get('/constructor', function () {
    return view('constructor');
});
Route::get('/constructorCreate', function () {
    return view('constructorCreate');
});
Route::post('/constructorCreate', [App\Http\Controllers\GiftController::class, 'constructor'])->name('constructorCreate');/*подарок*/

//Route::get('/shop', [App\Http\Controllers\TowarsController::class, 'fourNewTovarAll'])->name('shop'); //вывод 4ех товара по новизне
// Route::get('/shop', [App\Http\Controllers\TowarsController::class, 'all'])->name('shop'); //вывод всех товаров по новизне

//Route::get('/helpReview', function () {
//    return view('helpReview');
//});
Route::get('/helpReview', [App\Http\Controllers\HelpReviewController::class, 'index'])->name('helpReview');/*вывод всех запросов о помощи*/

/*роутеры для админки*/
Route::get('/admin', function () {
    return view('admin');
});

//Route::get('/podaroc', function () {
//    return view('orders.podaroc');
//})->name('podaroc');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin');
})->middleware('admin');

/*клиенты*/
Route::get('/admin', [App\Http\Controllers\InfoUserController::class, 'allInfo'])->name('admin');/*вывод клиентов*/
Route::get('/admin/{id}/delete', [App\Http\Controllers\InfoUserController::class, 'deleteInfo'])->name('admin.deleteInfo');/*удаление клиентов*/

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
});

/*все новости*/
//Route::get('/blog', [App\Http\Controllers\NewsesController::class, 'index'])->name('blog');/*новости по категории*/
Route::get('/news/index/{id}', [App\Http\Controllers\NewsesController::class, 'news'])->name('news.index');/*страница с новостью*/
//Route::get('/news/index/{id}', [App\Http\Controllers\NewsesController::class, 'random'])->name('news.index');/*вывод рандомных новостей*/
Route::get('/news/edit/{id}', [App\Http\Controllers\NewsesController::class, 'edit'])->name('news.edit');/*изменить новость*/
Route::post('/news/update/{id}', [App\Http\Controllers\NewsesController::class, 'update'])->name('news.update');/*сохранить изменение новости*/
Route::get('/adminBlog/delete/{id}', [App\Http\Controllers\NewsesController::class, 'destroy'])->name('adminBlog.delete');/*удалить новость*/
Route::get('/adminBlogAdd', [App\Http\Controllers\NewsesController::class, 'create'])->name('adminBlogAdd');/*создать новость*/
Route::post('/adminBlogAdd/store', [App\Http\Controllers\NewsesController::class, 'store'])->name('adminBlogAdd.store');/*занести данные новости*/

/*товары у админа*/
Route::get('/adminTovar', [App\Http\Controllers\TowarsController::class, 'allAdminTowars'])->name('adminTovar'); //вывод всех товаров по новизне у админа


Route::get('/towars/index/{id}', [App\Http\Controllers\TowarsController::class, 'towars'])->name('towars.index');/*страница с товаром*/
Route::get('/towars/edit/{id}', [App\Http\Controllers\TowarsController::class, 'edit'])->name('towars.edit');/*изменить товар*/
Route::post('/towars/update/{id}', [App\Http\Controllers\TowarsController::class, 'update'])->name('towars.update');/*сохранить изменение товара*/
Route::get('/adminTovar/delete/{id}', [App\Http\Controllers\TowarsController::class, 'destroy'])->name('adminTovar.delete');/*удалить товар*/
Route::get('/adminTovarAdd', [App\Http\Controllers\TowarsController::class, 'create'])->name('adminTovarAdd');/*создать товар*/
Route::post('/adminTovarAdd/store', [App\Http\Controllers\TowarsController::class, 'store'])->name('adminTovarAdd.store');/*занести данные товар*/


/*корзина*/
Route::post('/add_cart/{id}', [App\Http\Controllers\HomeController::class, 'add_cart'])->name('add_cart');/*добавить в корзину*/
Route::get('/carts', [App\Http\Controllers\HomeController::class, 'carts'])->name('carts.index');/*корзина с товарами*/
Route::get('/carts/delete{id}', [App\Http\Controllers\HomeController::class, 'cart_destroy'])->name('carts.delete');/*удалить товар из корзины*/
Route::get('/cash_order', [App\Http\Controllers\HomeController::class, 'cash_order'])->name('cash_order');/*оформление заказа оплата наличными*/
Route::get('/cardOnline', function () {
    return view('cardOnline');
});


/*заказы*/
Route::get('/orders', [App\Http\Controllers\HomeController::class, 'ordersAdmin'])->name('orders.index');/*вывод всех заказов*/
Route::post('/delivered/{id}', [App\Http\Controllers\HomeController::class, 'delivered'])->name('orders.index');/*вывод всех заказов*/
Route::patch('/delivered/update/{id}', [App\Http\Controllers\HomeController::class, 'update_delivered'])->name('orders.index');/*сохранить изменен*/
Route::get('/product', [App\Http\Controllers\HomeController::class, 'ordersUser'])->name('product');/*вывод всех заказов у пользователя*/
Route::get('/products/more/{id}', [App\Http\Controllers\HomeController::class, 'productMore'])->name('products.more');/*вывод информации о заказе*/

/*подарок*/
Route::get('/podaroc', [App\Http\Controllers\GiftController::class, 'podarocAdmin'])->name('orders.podaroc');/*вывод всех заказов*/
Route::post('/podarocdelivered/{id}', [App\Http\Controllers\GiftController::class, 'delivered'])->name('orders.podaroc');/*вывод всех заказов*/
Route::patch('/podarocdelivered/update/{id}', [App\Http\Controllers\GiftController::class, 'update_delivered'])->name('orders.podaroc');/*сохранить изменение товара*/
//Route::get('/podarocproduct', [App\Http\Controllers\GiftController::class, 'podarocUser'])->name('product');/*вывод всех заказов у пользователя*/
Route::get('/box/{id}', function ($id) {
    $box = \App\Models\Gift::find($id);
    $arr = json_decode($box->products);
    $newArr = [];
    foreach ($arr as $item){
        $newArr[] = Towar::find($item);
    }
    $box->products = $newArr;
    return view('products.box')->with('gifts',$box);
})->name('box');/*вывод информации о подарке*/

/*отзыв на сайт*/
Route::post('/home', [App\Http\Controllers\SiteReviewController::class, 'store'])->name('home');/*добавить отзыв*/
Route::get('/', [App\Http\Controllers\SiteReviewController::class, 'randomreviews'])->name('welcome');/*вывести рандомные отзывы на сайте*/

/*сообщение для помощи*/
Route::post('/', [App\Http\Controllers\HelpReviewController::class, 'store'])->name('welcome');/*добавить сообщение о помощи*/


// Фильтры
Route::post('/sort', [TowarsController::class, 'sort'])->name('sort');
