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

Route::get('buy', 'BuyController@index')->name('buy');




// **********************************************
Route::get('/', function () {
    return view('home.dashboard');
})->name('dashboard');

Route::get('/ecommerce', function () {
    return view('ecommerce-dashboard');
})->name('index');

Route::get('ecommerce-dashboard', function () {
    return view('ecommerce-dashboard');
})->name('ecommerce-dashboard');

Route::get('orders', function () {
    return view('orders');
})->name('orders');

Route::get('product-list', function () {
    return view('product-list');
})->name('product-list');

Route::get('product-grid', function () {
    return view('product-grid');
})->name('product-grid');

Route::get('product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::get('analytics-dashboard', function () {
    return view('analytics-dashboard');
})->name('analytics-dashboard');

Route::get('helpdesk-dashboard', function () {
    return view('helpdesk-dashboard');
})->name('helpdesk-dashboard');

Route::get('chat', function () {
    return view('chat');
})->name('chat');

Route::get('mail', function () {
    return view('mail');
})->name('mail');

Route::get('todo-list', function () {
    return view('todo-list');
})->name('todo-list');

Route::get('file-manager', function () {
    return view('file-manager');
})->name('file-manager');

Route::get('calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('invoice', function () {
    return view('invoice');
})->name('invoice');

Route::get('user-list', function () {
    return view('user-list');
})->name('user-list');

Route::get('user-edit', function () {
    return view('user-edit');
})->name('user-edit');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('recovery-password', function () {
    return view('recovery-password');
})->name('recovery-password');

Route::get('lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('alert', function () {
    return view('alert');
})->name('alert');

Route::get('accordion', function () {
    return view('accordion');
})->name('accordion');

Route::get('buttons', function () {
    return view('buttons');
})->name('buttons');

Route::get('dropdown', function () {
    return view('dropdown');
})->name('dropdown');

Route::get('list-group', function () {
    return view('list-group');
})->name('list-group');

Route::get('pagination', function () {
    return view('pagination');
})->name('pagination');

Route::get('typography', function () {
    return view('typography');
})->name('typography');

Route::get('media-object', function () {
    return view('media-object');
})->name('media-object');

Route::get('progress', function () {
    return view('progress');
})->name('progress');

Route::get('modal', function () {
    return view('modal');
})->name('modal');

Route::get('spinners', function () {
    return view('spinners');
})->name('spinners');

Route::get('navs', function () {
    return view('navs');
})->name('navs');

Route::get('tab', function () {
    return view('tab');
})->name('tab');

Route::get('tooltip', function () {
    return view('tooltip');
})->name('tooltip');

Route::get('popovers', function () {
    return view('popovers');
})->name('popovers');

Route::get('basic-cards', function () {
    return view('basic-cards');
})->name('basic-cards');

Route::get('image-cards', function () {
    return view('image-cards');
})->name('image-cards');

Route::get('scrollable-cards', function () {
    return view('scrollable-cards');
})->name('scrollable-cards');

Route::get('other-cards', function () {
    return view('other-cards');
})->name('other-cards');

Route::get('basic-tables', function () {
    return view('basic-tables');
})->name('basic-tables');

Route::get('dataTable', function () {
    return view('dataTable');
})->name('dataTable');

Route::get('responsive-tables', function () {
    return view('responsive-tables');
})->name('responsive-tables');

Route::get('apexchart', function () {
    return view('apexchart');
})->name('apexchart');

Route::get('justgage', function () {
    return view('justgage');
})->name('justgage');

Route::get('peity', function () {
    return view('peity');
})->name('peity');

Route::get('google-map', function () {
    return view('google-map');
})->name('google-map');

Route::get('vector-map', function () {
    return view('vector-map');
})->name('vector-map');

Route::get('avatar', function () {
    return view('avatar');
})->name('avatar');

Route::get('icons', function () {
    return view('icons');
})->name('icons');

Route::get('colors', function () {
    return view('colors');
})->name('colors');

Route::get('divider', function () {
    return view('divider');
})->name('divider');

Route::get('basic-forms', function () {
    return view('basic-forms');
})->name('basic-forms');

Route::get('custom-forms', function () {
    return view('custom-forms');
})->name('custom-forms');

Route::get('advanced-forms', function () {
    return view('advanced-forms');
})->name('advanced-forms');

Route::get('form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('form-repeater', function () {
    return view('form-repeater');
})->name('form-repeater');

Route::get('file-upload', function () {
    return view('file-upload');
})->name('file-upload');

Route::get('datepicker', function () {
    return view('datepicker');
})->name('datepicker');

Route::get('timepicker', function () {
    return view('timepicker');
})->name('timepicker');

Route::get('colorpicker', function () {
    return view('colorpicker');
})->name('colorpicker');

Route::get('sweet-alert', function () {
    return view('sweet-alert');
})->name('sweet-alert');

Route::get('lightbox', function () {
    return view('lightbox');
})->name('lightbox');

Route::get('toast', function () {
    return view('toast');
})->name('toast');

Route::get('tour', function () {
    return view('tour');
})->name('tour');

Route::get('slick-slide', function () {
    return view('slick-slide');
})->name('slick-slide');

Route::get('nestable', function () {
    return view('nestable');
})->name('nestable');

Route::get('timeline', function () {
    return view('timeline');
})->name('timeline');

Route::get('pricing-table', function () {
    return view('pricing-table');
})->name('pricing-table');

Route::get('pricing-table-2', function () {
    return view('pricing-table-2');
})->name('pricing-table-2');

Route::get('search-result', function () {
    return view('search-result');
})->name('search-result');

Route::get('blank-page', function () {
    return view('blank-page');
})->name('blank-page');

Route::get('404', function () {
    return view('404');
})->name('404');

Route::get('503', function () {
    return view('503');
})->name('503');

Route::get('mean-at-work', function () {
    return view('mean-at-work');
})->name('mean-at-work');

Route::get('email-template-basic', function () {
    return view('email-template-basic');
})->name('email-template-basic');

Route::get('email-template-alert', function () {
    return view('email-template-alert');
})->name('email-template-alert');

Route::get('email-template-billing', function () {
    return view('email-template-billing');
})->name('email-template-billing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
