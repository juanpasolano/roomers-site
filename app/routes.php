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

Route::group(array('prefix' => 'cms'), function() {
	Route::get('customers/{id}/orders', '\cms\CustomersController@getOrders');
	Route::resource('customers', '\cms\CustomersController');
	Route::resource('products', '\cms\ProductsController');
	Route::resource('collections', '\cms\CollectionsController');
	Route::resource('categories', '\cms\CategoriesController');
	Route::resource('taxes', '\cms\TaxesController');
}


Route::resource('products', 'Products');

Route::resource('users', 'UsersController');

Route::resource('addresses', 'AddressesController');

Route::resource('orders', 'OrdersController');

Route::resource('categories', 'CategoriesController');

Route::resource('collections', 'CollectionsController');

Route::resource('taxes', 'TaxesController');