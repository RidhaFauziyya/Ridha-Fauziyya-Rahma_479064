<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


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
    return view('home');
});

Route::get('about/hapus/{id}', [App\Http\Controllers\AboutController::class, 'hapus']);
Route::get('project/hapus/{id}', [App\Http\Controllers\ProjectController::class, 'hapus']);
Route::resource('akun', 'App\Http\Controllers\AkunController');
Route::resource('home', 'App\Http\Controllers\HomeController');
Route::resource('project', 'App\Http\Controllers\ProjectController');
Route::resource('education', 'App\Http\Controllers\EducationController');
Route::resource('about', 'App\Http\Controllers\AboutController');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/send-email',function(){
    $data = [
    'name' => 'Nama Anda',
    'body' => 'Testing Kirim Email'
    ];
   
    Mail::to('parkcyoke@gmail.com')->send(new SendEmail($data));
   
    dd("Email Berhasil dikirim.");
});

Route::get('/send-email', [App\Http\Controllers\SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [App\Http\Controllers\SendEmailController::class, 'store'])->name('post-email');

Route::get('/send-link', [App\Http\Controllers\SendLinkController::class, 'index'])->name('reset-password');
Route::post('/post-link', [App\Http\Controllers\SendLinkController::class, 'store'])->name('post-link');

