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


/***
 * Begining of Frontend Routes
 */

Route::get('/', function () {
    return redirect(session('locale', 'uz'));
});
Route::get('/page/{slug}', function ($slug) {
    return redirect(session('locale', app()->getLocale()) . '/page/' . $slug);
});
Route::get('/post/{slug}', function ($slug) {
    return redirect(session('locale', app()->getLocale()) . '/post/' . $slug);
});
Route::get('/posts', function () {
    return redirect(session('locale', app()->getLocale()) . '/posts');
});
Route::get('/post-news', function () {
    return redirect(session('locale', app()->getLocale()) . '/post-news');
});
Route::get('/post-ads', function () {
    return redirect(session('locale', app()->getLocale()) . '/post-ads');
});

Route::post('/contact', ['App\Http\Controllers\Frontend\ContactController', 'store'])->name('contact-send');
Route::get('/contact', function () {
    return redirect(session('locale', app()->getLocale()) . '/contact');
});
Route::get('/reload-captcha', ['App\Http\Controllers\Frontend\CaptchaServiceController', 'reloadCaptcha']);

$frontend_attributes = [
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2,4}'],
    'middleware' => 'restrict.undefined.locales'
];

Route::group($frontend_attributes, function () {
    Route::get('/', ['App\Http\Controllers\Frontend\SiteController', 'index'])->name('home');
    Route::get('/page/{slug}', ['App\Http\Controllers\Frontend\PageController', 'index'])->name('page');
    Route::get('/post/{slug}', ['App\Http\Controllers\Frontend\PostController', 'index'])->name('post');
    Route::get('/posts', ['App\Http\Controllers\Frontend\PostController', 'allPost'])->name('post.all');
    Route::get('/post-news', ['App\Http\Controllers\Frontend\PostController', 'allPostNews'])->name('post.news');
    Route::get('/post-ads', ['App\Http\Controllers\Frontend\PostController', 'allPostAds'])->name('post.ads');
    Route::get('/contact', ['App\Http\Controllers\Frontend\ContactController', 'index'])->name('contact');
});

/***
 * Ending of Frontend Routes
 */


/***
 * Begining of Backend Routes
 */

Route::group(['prefix' => '/admin', 'middleware' => ['backend.locale', 'route.access']], function () {

    Route::group(['middleware' => 'auth', 'namespace' => '\App\Http\Controllers\Backend'], function () {
        Route::get('/', ['uses' => 'HomeController@index'])->name('admin.home');

        Route::group(['prefix' => '/menu', 'as' => 'admin.'], function () {
            Route::get('/', ['uses' => 'MenuController@index'])->name('menu');
            Route::post('/', ['uses' => 'MenuController@store'])->name('menu');
            Route::get('/change/{id}', ['uses' => 'MenuController@edit'])->name('menu.change');
            Route::post('/change/{id}', ['uses' => 'MenuController@update'])->name('menu.change');
            Route::delete('/delete/{id}', ['uses' => 'MenuController@delete'])->name('menu.delete');
        });

        Route::group(['prefix' => '/user', 'as' => 'admin.user.', 'namespace' => '\App\Http\Controllers\Auth'], function () {
            Route::get('/settings', ['uses' => 'SettingsController@showChangeUserForm'])->name('settings');
            Route::post('/settings', ['uses' => 'SettingsController@updateSettings'])->name('settings');

        });

        Route::group(['prefix' => '/users', 'as' => 'admin.user.', 'namespace' => '\App\Http\Controllers\Backend'], function () {
            Route::get('/', ['uses' => 'UserController@index'])->name('index');
            Route::get('/create', ['uses' => 'UserController@create'])->name('create');
            Route::post('/create', ['uses' => 'UserController@store'])->name('create');
            Route::get('/update/{id}', ['uses' => 'UserController@edit'])->name('update');
            Route::post('/update/{id}', ['uses' => 'UserController@update'])->name('update');
            Route::delete('/delete/{id}', ['uses' => 'UserController@delete'])->name('delete');
        });

        Route::group(['prefix' => '/banner', 'as' => 'admin.', 'namespace' => '\App\Http\Controllers\Backend'], function () {
            Route::get('/', ['uses' => 'BannerController@index'])->name('banner');
            Route::post('/', ['uses' => 'BannerController@store'])->name('banner');
            Route::get('/update/{id}', ['uses' => 'BannerController@edit'])->name('banner.update');
            Route::post('/update/{id}', ['uses' => 'BannerController@update'])->name('banner.update');
            Route::delete('/delete/{id}', ['uses' => 'BannerController@delete'])->name('banner.delete');
        });

        Route::group(['prefix' => '/page', 'as' => 'admin.', 'namespace' => '\App\Http\Controllers\Backend'], function () {
            Route::get('/', ['uses' => 'PageController@index'])->name('page');
            Route::get('/create', ['uses' => 'PageController@create'])->name('page.create');
            Route::post('/create', ['uses' => 'PageController@store'])->name('page.create');
            Route::get('/view/{id}', ['uses' => 'PageController@show'])->name('page.view');
            Route::get('/update/{id}', ['uses' => 'PageController@edit'])->name('page.update');
            Route::post('/update/{id}', ['uses' => 'PageController@update'])->name('page.update');
            Route::delete('/delete/{id}', ['uses' => 'PageController@delete'])->name('page.delete');
        });

        Route::group(['prefix' => '/post', 'as' => 'admin.', 'namespace' => '\App\Http\Controllers\Backend'], function () {
            Route::get('/', ['uses' => 'PostController@index'])->name('post');
            Route::get('/create', ['uses' => 'PostController@create'])->name('post.create');
            Route::post('/create', ['uses' => 'PostController@store'])->name('post.create');
            Route::post('/upload-image', ['uses' => 'PostController@uploadImage'])->name('post.uploadImage');
            Route::get('/change-visibility/{id}', ['uses' => 'PostController@changeVisibility'])->name('post.change.visibility');
            Route::get('/view/{id}', ['uses' => 'PostController@show'])->name('post.view');
            Route::get('/update/{id}', ['uses' => 'PostController@edit'])->name('post.update');
            Route::post('/update/{id}', ['uses' => 'PostController@update'])->name('post.update');
            Route::delete('/delete/{id}', ['uses' => 'PostController@delete'])->name('post.delete');
        });

        Route::group(['prefix' => '/contact', 'as' => 'admin.'], function () {
            Route::get('/', ['App\Http\Controllers\Backend\ContactController', 'index'])->name('contact');
            Route::get('/view/{id}', ['App\Http\Controllers\Backend\ContactController', 'show'])->name('contact.view');
            Route::delete('/delete/{id}', ['App\Http\Controllers\Backend\ContactController', 'delete'])->name('contact.delete');
        });

        Route::group(['prefix' => '/useful-sites', 'as' => 'admin.'], function () {
            Route::get('/', ['App\Http\Controllers\Backend\UsefulSiteController', 'index'])->name('useful-site');
            Route::get('/create', ['App\Http\Controllers\Backend\UsefulSiteController', 'create'])->name('useful-site.create');
            Route::post('/store', ['App\Http\Controllers\Backend\UsefulSiteController', 'store'])->name('useful-site.store');
            Route::get('/edit/{id}', ['App\Http\Controllers\Backend\UsefulSiteController', 'edit'])->name('useful-site.edit');
            Route::put('/update/{id}', ['App\Http\Controllers\Backend\UsefulSiteController', 'update'])->name('useful-site.update');
            Route::delete('/delete/{id}', ['App\Http\Controllers\Backend\UsefulSiteController', 'delete'])->name('useful-site.delete');
        });

        Route::group(['prefix' => '/video-clip', 'as' => 'admin.'], function () {
            Route::get('/',['App\Http\Controllers\Backend\VideoClipController','index'])->name('video-clip');
            Route::get('/create',['App\Http\Controllers\Backend\VideoClipController','create'])->name('video-clip.create');
            Route::post('/store', ['App\Http\Controllers\Backend\VideoClipController', 'store'])->name('video-clip.store');
            Route::get('/edit/{id}', ['App\Http\Controllers\Backend\VideoClipController', 'edit'])->name('video-clip.edit');
            Route::put('/update/{id}', ['App\Http\Controllers\Backend\VideoClipController', 'update'])->name('video-clip.update');
            Route::delete('/delete/{id}', ['App\Http\Controllers\Backend\VideoClipController', 'destroy'])->name('video-clip.delete');
        });

        Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
        Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });

    });

    Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

});

/***
 * Ending of Backend Routes
 */

