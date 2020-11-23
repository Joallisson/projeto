<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    //=======  NOVAS ROTAS CRIADADAS MANUALMENTE ===============================================================================================
    Route::get('/listar', 'Users\Admin\AdminController@listar')->name('admin.listar');
    Route::get('/show/{id}', 'Users\Admin\AdminController@show')->name('admin.show');
    Route::delete('/delete/{id}', 'Users\Admin\AdminController@delete')->name('admin.delete'); //Deletar o admin
    Route::get('/edit/{id}', 'Users\Admin\AdminController@edit')->name('admin.edit'); //Mostrar formulário para editar admin
    Route::post('/update/{id}', 'Users\Admin\AdminController@update')->name('admin.update'); //Deletar admin
    Route::any('/pesquisar', 'Users\Admin\AdminController@pesquisar')->name('admin.pesquisar'); //Pesquisar admin



});


// Vendor routes
Route::prefix('vendor')->group(function(){
    Route::get('/', 'Users\Vendor\VendorController@index')->name('vendor.dashboard');
    Route::get('/login', 'Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login', 'Auth\VendorLoginController@login')->name('vendor.login.submit');
    Route::get('/register', 'Auth\VendorRegisterController@showRegisterForm')->name('vendor.register');
    Route::post('/register', 'Auth\VendorRegisterController@register')->name('vendor.register.submit');
    //=======  CADASTROS DE PRODUTOS =======================================================================================================================
    Route::get('/cadastros/compras', 'CompraController@index')->name('user.compras');//mostrar login de cadastro de compras de produtos
    Route::post('/cadastros/compras', 'CompraController@cadastrarCompras')->name('user.compras'); //fazer cadastros de compras de produtos

});
