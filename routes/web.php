<?php

use App\Events\MessageNotification;
use App\Events\PaymentNotification;
use Illuminate\Support\Facades\Route;

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



Route::get('/event', function () {
    event(new MessageNotification('This is our first broadcast message'));
    event(new PaymentNotification([
        'price'=> 100,
        'description'=> 'Paiement marchand'
    ]));
});

Route::get('/listen', function () {
    return view('listen');
});
