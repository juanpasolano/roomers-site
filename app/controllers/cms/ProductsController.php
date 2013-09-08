<?php

namespace cms;

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{
		// return Product::all();
		$products = \Product::all();
		return \View::make('cms.products.index', array('products'=> $products));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = \Category::all();
		$collections = \Collection::all();
		return \View::make('cms.products.create', array('categories'=> $categories, 'collections' => $collections));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


		// $file = \Input::file('image');
		// dd($file);
		// $destinationPath = 'uploads/products/';
		// $filename = $file->getClientOriginalName();
		// $uploadSuccess = \Input::file('image')->move($destinationPath, $filename);

		// if( $uploadSuccess ) {
		//    return \Response::json('success', 200);
		// } else {
		//    return \Response::json('error', 400);
		// }
		$productData = \Input::all();
		unset($productData['categories']);
		$product =  new \Product($productData);
		$product->categories = \Input::get('categories');
		$product->save();
		return \Response::json($product, 200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product = \Product::with('categories', 'collection')->get()->find($id);
		return \Response::json($product);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = \Product::find($id);
		return \View::make('cms.products.edit', array('product'=> $product));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		dd($id.' sadasdasdasdasd');
		$product = \Product::find($id);
		$product->delete();
	}

}