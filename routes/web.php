<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
//    return view('index')->name('index');
//});
Route::get('/homes', [App\Http\Controllers\HomeController::class, 'index'])->name('homes');


Route::get('/', [App\Http\Controllers\IndexController::class, '__invoke'])->name('index');
Route::get('/abouts', [App\Http\Controllers\AboutController::class, '__invoke'])->name('about');
Route::get('/contacts', [App\Http\Controllers\ContactController::class, '__invoke'])->name('contacts');
Route::get('/services', [App\Http\Controllers\OurServiceController::class, '__invoke'])->name('services');
Route::get('/single-service/{service}', [App\Http\Controllers\OurServiceController::class, 'single'])->name('singleServices');

Route::post('/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('registerComment.index');
//Route::get('/service/creat', [App\Http\Controllers\Admin\ServiceController::class, 'creat'])->name('admin.service.creat');
//Route::post('/service', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('admin.service.store');
//Route::get('/service/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'show'])->name('admin.service.show');
//Route::get('/service/{service}/edit', [App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin.service.edit');
//Route::patch('/service/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('admin.service.update');
//Route::delete('/service/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'delete'])->name('admin.service.delete');

Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home.index');
    Route::get('/home/creat', [App\Http\Controllers\Admin\HomeController::class, 'creat'])->name('admin.home.creat');
    Route::post('/home', [App\Http\Controllers\Admin\HomeController::class, 'store'])->name('admin.home.store');
    Route::get('/home/{home}', [App\Http\Controllers\Admin\HomeController::class, 'show'])->name('admin.home.show');
    Route::get('/home/{home}/edit', [App\Http\Controllers\Admin\HomeController::class, 'edit'])->name('admin.home.edit');
    Route::patch('/home/{home}', [App\Http\Controllers\Admin\HomeController::class, 'update'])->name('admin.home.update');
    Route::delete('/home/{home}', [App\Http\Controllers\Admin\HomeController::class, 'delete'])->name('admin.home.delete');

    Route::get('/about', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('admin.about.index');
    Route::get('/about/creat', [App\Http\Controllers\Admin\AboutController::class, 'creat'])->name('admin.about.creat');
    Route::post('/about', [App\Http\Controllers\Admin\AboutController::class, 'store'])->name('admin.about.store');
    Route::get('/about/{about}', [App\Http\Controllers\Admin\AboutController::class, 'show'])->name('admin.about.show');
    Route::get('/about/{about}/edit', [App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('admin.about.edit');
    Route::patch('/about/{about}', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('admin.about.update');
    Route::delete('/about/{about}', [App\Http\Controllers\Admin\AboutController::class, 'delete'])->name('admin.about.delete');

    Route::get('/contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contact.index');
    Route::get('/contact/creat', [App\Http\Controllers\Admin\ContactController::class, 'creat'])->name('admin.contact.creat');
    Route::post('/contact', [App\Http\Controllers\Admin\ContactController::class, 'store'])->name('admin.contact.store');
    Route::get('/contact/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'show'])->name('admin.contact.show');
    Route::get('/contact/{contact}/edit', [App\Http\Controllers\Admin\ContactController::class, 'edit'])->name('admin.contact.edit');
    Route::patch('/contact/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'update'])->name('admin.contact.update');
    Route::delete('/contact/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'delete'])->name('admin.contact.delete');

    Route::get('/services', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/service/creat', [App\Http\Controllers\Admin\ServiceController::class, 'creat'])->name('admin.service.creat');
    Route::post('/service', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('admin.service.store');
    Route::get('/service/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'show'])->name('admin.service.show');
    Route::get('/service/{service}/edit', [App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin.service.edit');
    Route::patch('/service/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('admin.service.update');
    Route::delete('/service/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'delete'])->name('admin.service.delete');


    Route::delete('/file', [App\Http\Controllers\Admin\FileUploadController::class, 'delete'])->name('admin.file.delete');
    Route::delete('/video', [App\Http\Controllers\Admin\VideoController::class, 'delete'])->name('admin.video.delete');

//    Route::get('/send', [App\Http\Controllers\MailController::class, 'index'])->name('admin.mail.delete');





});
Route::get('send-email', [App\Http\Controllers\MailController::class, 'index'])->name('mail.send');

//Route::get('send-email', function(){
//    $mailData = [
//        "name" => "Test NAME",
//        "dob" => "12/12/1990"
//    ];
//
//    Mail::to("artush.xalatyan@mail.ru")->send(new \App\Mail\MailableName($mailData));
//
//    dd("Mail Sent Successfully!");
//});
