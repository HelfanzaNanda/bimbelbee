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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/dev'], function () {
    Route::get('/', 'DeveloperController@dashboard')->name('dashboard.dev');

    Route::get('/notifikasidev', 'DeveloperController@notifdev')->name('notifikasi.dev');
    Route::get('/notifikasidev/diterima/{id}', 'DeveloperController@diterimadev')->name('notifikasi.dev.diterima');
    Route::get('/notifikasidev/ditolak/{id}', 'DeveloperController@ditolakdev')->name('notifikasi.dev.ditolak');
    Route::get('/notifikasidev/dihapus/{id}', 'DeveloperController@dihapusdev')->name('notifikasi.dev.dihapus');

    Route::get('/kelolaakunbimbel', 'DeveloperController@index')->name('ubimbel');
    Route::get('/kelolaakunbimbel/create', 'DeveloperController@create')->name('ubimbel.create');
    Route::post('/kelolaakunbimbel/create', 'DeveloperController@store')->name('ubimbel.store');
    Route::get('/kelolaakunbimbel/edit/{id}', 'DeveloperController@edit')->name('ubimbel.edit');
    Route::patch('/kelolaakunbimbel/edit/{id}', 'DeveloperController@update')->name('ubimbel.update');
    Route::get('/kelolaakunbimbel/destroy/{id}', 'DeveloperController@destroy')->name('ubimbel.destroy');

    Route::get('/profile', 'DeveloperController@profile')->name('dev.profil');
    Route::post('/profile', 'DeveloperController@updateprofile')->name('dev.profil.update');

});

//sbg bimbel
Route::group(['prefix' => '/bimbel'], function () {

    Route::get('/', 'UserBimbelController@dashboard')->name('dashboard.bimbel');

    Route::get('/notifikasibimbel', 'UserBimbelController@notifbimbel')->name('notifikasi.bimbel');
    Route::get('/notifikasibimbel/diterima/{id}', 'UserBimbelController@diterimabimbel')->name('notifikasi.bimbel.diterima');
    Route::get('/notifikasibimbel/ditolak/{id}', 'UserBimbelController@ditolakbimbel')->name('notifikasi.bimbel.ditolak');

    Route::get('/kelolaakunsiswa', 'UserBimbelController@index')->name('usiswa');
    Route::get('/kelolaakunsiswa/create', 'UserBimbelController@create')->name('usiswa.create');
    Route::post('/kelolaakunsiswa/create', 'UserBimbelController@store')->name('usiswa.store');
    Route::get('/kelolaakunsiswa/edit/{id}', 'UserBimbelController@edit')->name('usiswa.edit');
    Route::patch('/kelolaakunsiswa/edit/{id}', 'UserBimbelController@update')->name('usiswa.update');
    Route::get('/kelolaakunsiswa/destroy/{id}', 'UserBimbelController@destroy')->name('usiswa.destroy');

    Route::get('/profile', 'UserBimbelController@profile')->name('bimbel.profil');
    Route::post('/profile', 'UserBimbelController@updateprofile')->name('bimbel.profil.update');

    Route::get('/bimbel', 'BimbelController@index')->name('bimbel');
    Route::post('/bimbel/create', 'BimbelController@store')->name('bimbel.store');

    Route::get('/paket', 'BimbelController@paket')->name('paket');
    Route::get('/paket/create', 'BimbelController@paketcreate')->name('paket.create');
    Route::post('/paket/create', 'BimbelController@paketstore')->name('paket.store');
    Route::get('/paket/edit/{id}', 'BimbelController@paketedit')->name('paket.edit');
    Route::patch('/paket/edit/{id}', 'BimbelController@paketupdate')->name('paket.update');
    Route::get('/paket/destroy/{id}', 'BimbelController@paketdestroy')->name('paket.destroy');

    Route::get('/admin-logout', 'Auth\LoginController@logoutDev')->name('dev.logout');
});

//register dev
Route::get('/dev-register', 'Auth\RegisterController@showRegisterForm')->name('dev.register');
Route::post('/dev-register', 'Auth\RegisterController@store')->name('dev.register.submit');

//register dan login bimbel
Route::get('/bimbel-login', 'AuthBimbel\LoginController@showLoginForm')->name('bimbel.login');
Route::post('/bimbel-login', 'AuthBimbel\LoginController@login')->name('bimbel.login.submit');
Route::get('/bimbel-register', 'AuthBimbel\RegisterController@showRegisterForm')->name('bimbel.register');
Route::post('/bimbel-register', 'AuthBimbel\RegisterController@store')->name('bimbel.register.submit');
Route::get('/bimbel-logout', 'AuthBimbel\LoginController@logout')->name('bimbel.logout');

//front-end
Route::get('/abimbel', function () {
    return view('front-end.bimbel');
});
Route::get('/daftar', function () {
    return view('front-end.daftar');
});
Route::get('/', function () {
    return view('front-end.haldepan');
});
Route::get('/about', function () {
    return view('front-end.tentangkami');
});

Route::get('/hallogin', function () {
    return view('front-end.login');
});