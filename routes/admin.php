<?php



Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/viewrole','RoleController@index')->name('view-role');
    Route::POST('/removerole/{id}','RoleController@removeRole')->name('remove-role');
    Route::POST('/giverole/{id}','RoleController@giveRole')->name('give-role');
    Route::get('/viewcustomers','CustomerController@index')->name('view-customer');
    Route::get('/viewcustomers/{id}','CustomerController@view_customer')->name('customer_info');
});
});