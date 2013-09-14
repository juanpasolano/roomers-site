<?php

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

// Route::get('/', 'Home@index');

Route::get('/', function(){
	// $user = new User;
	// $user->email = 'asd@clam.com';
	// $user->password = Hash::make('password');
	// $user->save();
	// return link_to('/admin', 'Go to admin');
});

// Route::get('/admin', ['before'=> 'auth.basic', function(){
// 	return link_to('/users', 'Users');
// }]);

Route::get('getSeeds', function(){
	// \Iseed::generateSeed('addresses');
	// \Iseed::generateSeed('orders');
	// \Iseed::generateSeed('product_category');
	\Iseed::generateSeed('taxes');
});


Route::get('cms/customers/{id}/orders', '\cms\CustomersController@getOrders');
Route::resource('cms/customers', '\cms\CustomersController');
Route::resource('cms/products', '\cms\ProductsController');
Route::resource('cms/collections', '\cms\CollectionsController');
Route::resource('cms/categories', '\cms\CategoriesController');
Route::resource('cms/taxes', '\cms\TaxesController');


Route::resource('products', 'Products');

Route::resource('users', 'UsersController');

Route::resource('addresses', 'AddressesController');

Route::resource('orders', 'OrdersController');

Route::resource('categories', 'CategoriesController');

Route::resource('collections', 'CollectionsController');

Route::resource('taxes', 'TaxesController');