<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('can:admin')->group(function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

    Route::get('/admin/product/list', 'Admin\ProductController@list')->name('admin.product.list');
    Route::resource('/admin/product', 'Admin\ProductController')->names([
        'create'  => 'admin.product.create',
        'store'   => 'admin.product.store',
        'show'    => 'admin.product.show',
        'edit'    => 'admin.product.edit',
        'update'  => 'admin.product.update',
        'destroy' => 'admin.product.destroy',
    ]);
});


