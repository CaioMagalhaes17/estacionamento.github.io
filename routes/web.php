<?php

use Illuminate\Support\Facades\Route;
use LaravelQRCode\Facades\QRCode;

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

Route::get('qrcode/ler', function () {
    return  QRCode::url('werneckbh.github.io/qr-code/')
                  ->setSize(8)
                  ->setMargin(2)
                  ->svg();
});
