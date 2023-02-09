<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonDatabaseController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;

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
    return view('website.index');
});

Route::get('/crm', function () {
    return view('crm.index');
});

Route::get('mail', function () {
    return view('mails/MyTestMail');
});

Route::resource('mails', MailController::class);

Route::resource('newsletters', NewsletterController::class);

Route::resource('data', JsonDatabaseController::class);
