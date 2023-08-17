<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Routes;
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

$controller_path = 'App\Http\Controllers';

// Main Page Route
// Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');

// pages
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');

// authentication
Route::get('/sign-in', $controller_path . '\authentications\Login@index')->name('auth-login');
Route::get('/registration', $controller_path . '\authentications\Register@index')->name('auth-register');
Route::get('/', [Routes::class, 'index'])->name('index');
Route::get('about', [Routes::class, 'about'])->name('about');
Route::get('terms-of-service', [Routes::class, 'tos'])->name('tos');
Route::get('privacy-policy', [Routes::class, 'privacy'])->name('privacy');
Route::get('sitemap', [Routes::class, 'sitemap'])->name('sitemap');
Route::get('job-career', [Routes::class, 'jobCareer'])->name('jobCareer');
Route::get('courses', [Routes::class, 'courses'])->name('courses');
Route::get('web-app', [Routes::class, 'webApp'])->name('web');
Route::get('video-production', [Routes::class, 'video'])->name('video');
Route::get('seo-service', [Routes::class, 'seo'])->name('seo');
Route::get('uiux-service', [Routes::class, 'uiux'])->name('uiux');
Route::get('contact', [Routes::class, 'contact'])->name('contact');
