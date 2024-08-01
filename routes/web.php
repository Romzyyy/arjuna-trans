<?php

use App\Http\Controllers\Homepage;
use App\Http\Controllers\Login;
use App\Http\Controllers\Admin;
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

Route::get('/', [Homepage::class, 'Homepage']);

Route::get('/login', [Login::class, 'LoginTrans']);

Route::get('/admin', [Admin::class, 'Admin']);

Route::get('/testimoni', [Admin::class, 'Testimoni']);

Route::get('/jadwal', [Admin::class, 'jadwal']);

Route::get('/paket-layanan', [Admin::class, 'Layanan']);

Route::get('/short-video', [Admin::class, 'ShortVideo']);

Route::get('/pengaturan', [Admin::class, 'pengaturan']);

Route::get('/pengaturan-home', [Admin::class, 'pengaturanHome']);

Route::get('/pengaturan-paket-layanan', [
    Admin::class,
    'pengaturanPaketLayanan',
]);

Route::get('/pengaturan-jadwal-trips', [Admin::class, 'pengaturanJadwalTrips']);

Route::get('/pengaturan-short-video', [Admin::class, 'pengaturanShortVideo']);

Route::get('/pengaturan-testimonials', [
    Admin::class,
    'pengaturanTestimonials',
]);

Route::get('/pengaturan-tentang-kami', [Admin::class, 'pengaturanTentangKami']);
