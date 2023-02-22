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

Route::get('/', function () {
    return view('modules.dashboard.index');
});

Route::get('/contact-info', function () {
    return view('modules.contact-info.index');
});

Route::get('/contact-info/create', function () {
    return view('modules.contact-info.create');
});

Route::get('/contact-info/edit', function () {
    return view('modules.contact-info.edit');
});

Route::get('/contact-queries', function () {
    return view('modules.contact-queries.index');
});

Route::get('/social-links', function () {
    return view('modules.social-accounts.create-or-edit');
});

Route::get('/terms', function () {
    return view('modules.terms-and-conditions.create-or-edit');
});

Route::get('/privacy-policies', function () {
    return view('modules.privacy-policies.create-or-edit');
});

Route::get('/faqs', function () {
    return view('modules.faqs.index');
});

Route::get('/faqs/create', function () {
    return view('modules.faqs.create');
});

Route::get('/faqs/edit', function () {
    return view('modules.faqs.edit');
});

Route::get('/mail-configuration', function () {
    return view('modules.mail-configuration.index');
});

Route::get('/mail-configuration/create', function () {
    return view('modules.mail-configuration.create');
});

Route::get('/mail-configuration/edit', function () {
    return view('modules.mail-configuration.edit');
});

Route::get('/general-settings', function () {
    return view('modules.general-settings.create-or-edit');
});
