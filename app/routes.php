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
	\Iseed::generateSeed('products');
});

Route::group(array('prefix' => 'cms'), function() {
	Route::get('customers/{id}/orders', '\cms\CustomersController@getOrders');
	Route::resource('customers', '\cms\CustomersController');
	Route::resource('products', '\cms\ProductsController');
	Route::resource('collections', '\cms\CollectionsController');
	Route::resource('categories', '\cms\CategoriesController');
	Route::resource('taxes', '\cms\TaxesController');
});


Route::resource('products', 'Products');
Route::resource('users', 'UsersController');
Route::resource('addresses', 'AddressesController');
Route::resource('orders', 'OrdersController');
Route::resource('categories', 'CategoriesController');
Route::resource('collections', 'CollectionsController');
Route::resource('taxes', 'TaxesController');
/*
|-----------------------------------------------------------------------------
| Routes for the front
|-----------------------------------------------------------------------------
*/
Route::get('/', function(){
	$collections = Collection::orderBy('updated_at', 'desc')->get()->all();
	$products = Product::where('premium', "=", '1')->get()->all();
	return View::make('front.index', array('collections'=>$collections, 'products'=>$products));
});

Route::get('shop', function(){
	$collections = Collection::orderBy('updated_at', 'desc')->get()->all();
	$categories = Category::orderBy('updated_at', 'desc')->get()->all();

	$products = Product::orderBy('updated_at', 'asc')->get()->all();
	return View::make('front.shop', array('products'=>$products, 'title'=>'Premium products'))
						->nest('shopNav', 'front.shopNav', array('collections'=>$collections, 'categories'=>$categories));
});
Route::get('shop/category/{id}', function($id){
	$collections = Collection::orderBy('updated_at', 'desc')->get()->all();
	$categories = Category::orderBy('updated_at', 'desc')->get()->all();

	$category = category::with('products')->get()->find($id);
	return View::make('front.shop', array('products'=>$category->products, 'title'=>$category->name))
						->nest('shopNav', 'front.shopNav', array('collections'=>$collections, 'categories'=>$categories));
});
Route::get('shop/collection/{id}', function($id){
	$collections = Collection::orderBy('updated_at', 'desc')->get()->all();
	$categories = Category::orderBy('updated_at', 'desc')->get()->all();

	$collection = Collection::with('products')->get()->find($id);
	return View::make('front.shop', array('products'=>$collection->products, 'title'=>$collection->name))
						->nest('shopNav', 'front.shopNav', array('collections'=>$collections, 'categories'=>$categories));
});

Route::post('cart/addItem/{id}', function($id){
	$product = Product::find($id);
	$item = array(
    'id' => $product->id,
    'name' => $product->name,
    'price' => $product->price,
    'tax_id' => $product->tax_id,
    'tax' => 10,
    'quantity' => 1
	);
	Cart::insert($item);
	// dd(Cart::total(false));
	return Response::json(Cart::contents(true),200);
	dd(Input::all());
});