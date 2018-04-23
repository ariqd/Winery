<?php

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
    return view('index');
});

Route::get('/promosi', 'FrontController@promosi');
Route::get('/artikel', 'FrontController@artikel');
Route::get('/about', 'FrontController@about');

Route::get('/kartu-kredit', 'CreditController@index');
Route::get('/kartu-kredit/detail/{id}', 'CreditController@show');
Route::get('/kartu-kredit/ajukan/{id}', 'CreditController@create');
Route::post('/kartu-kredit/ajukan/go/{id}', 'CreditController@store');
Route::post('/kartu-kredit/ajukan/ajax', 'CreditController@submission_filter');
Route::post('/kartu-kredit/ajax', 'CreditController@filter');

Route::get('/login', 'AuthController@login_view');
Route::get('/logout', 'AuthController@logout');
Route::post('/login/try', 'AuthController@login_attempt');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/requests', 'Admin\CreditCardsController@requests');
    Route::get('/admin/requests/approve/{id}', 'Admin\CreditCardsController@approve');
    Route::get('/admin/requests/decline/{id}', 'Admin\CreditCardsController@decline');
    Route::get('/admin/approved', 'Admin\CreditCardsController@approved');
    Route::get('/admin/approved/excel/{id}', 'Admin\CreditCardsController@downloadExcel')->name('approved.export');

    // Credit Card Routes
    //
    // Manage Credit Card Routes
    Route::get('/admin/cards', 'Admin\CreditCardsController@index');
    Route::get('/admin/cards/add', 'Admin\CreditCardsController@form');
    Route::post('/admin/cards/manage', 'Admin\CreditCardsController@manage');
    Route::post('/admin/cards/manage/{id}', 'Admin\CreditCardsController@manage');
    Route::get('/admin/cards/edit/{id}', 'Admin\CreditCardsController@form');
    Route::get('/admin/cards/delete/{id}', 'Admin\CreditCardsController@delete_card');
    Route::post('/admin/cards/search', 'Admin\CreditCardsController@search');

    // Setting Routes
    Route::get('/admin/setting', 'Admin\SettingController@index');

    Route::post('/admin/setting/bank', 'Admin\SettingController@manage_bank');
    Route::get('/admin/setting/bank/{id}', 'Admin\SettingController@edit_bank');
    Route::post('/admin/setting/bank/{id}', 'Admin\SettingController@manage_bank');
    Route::get('/admin/setting/bank/delete/{id}', 'Admin\SettingController@delete_bank');

    Route::post('/admin/setting/jenis', 'Admin\SettingController@manage_jenis');
    Route::get('/admin/setting/jenis/{id}', 'Admin\SettingController@edit_jenis');
    Route::post('/admin/setting/jenis/{id}', 'Admin\SettingController@manage_jenis');
    Route::get('/admin/setting/jenis/delete/{id}', 'Admin\SettingController@delete_jenis');

    Route::post('/admin/setting/holder', 'Admin\SettingController@manage_holder');
    Route::get('/admin/setting/holder/{id}', 'Admin\SettingController@edit_holder');
    Route::post('/admin/setting/holder/{id}', 'Admin\SettingController@manage_holder');
    Route::get('/admin/setting/holder/delete/{id}', 'Admin\SettingController@delete_holder');

    Route::post('/admin/setting/category', 'Admin\SettingController@manage_category');
    Route::get('/admin/setting/category/{id}', 'Admin\SettingController@edit_category');
    Route::post('/admin/setting/category/{id}', 'Admin\SettingController@manage_category');
    Route::get('/admin/setting/category/delete/{id}', 'Admin\SettingController@delete_category');

    // Verify
    Route::get('/admin/requests/{id}/verify', 'Admin\VerifyController@index')->name('admin.verify');
    Route::post('/admin/requests/{id}/verify', 'Admin\VerifyController@verify')->name('admin.verifies');
    // End Verify

    //Articles
    Route::get('admin/artikel', 'Admin\AdminArticleController@index');
    // End Articles
});

