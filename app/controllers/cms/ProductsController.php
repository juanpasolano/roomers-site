<?php

namespace cms;

class ProductsController extends \BaseController {


	public function __construct()
	{
		$this->beforeFilter('admin-auth');
	}
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
		$taxes = \Tax::all();
		return \View::make('cms.products.create',
			array('categories'=> $categories,
						'collections' => $collections,
						'taxes' => $taxes
						));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$file = \Input::file('image');
		$productData = \Input::all();
		unset($productData['image']);
		if($file){
			$destinationPath = 'uploads/products/';
			$filename = $file->getClientOriginalName();
			$uploadSuccess = \Input::file('image')->move($destinationPath, $filename);
			$productData['image'] = $filename;
		}

		// if( $uploadSuccess ) {
		//    return \Response::json('success', 200);
		// } else {
		//    return \Response::json('error', 400);
		// }
		if(!isset($productData['premium'])){ $productData['premium'] = 0;}
		if(!isset($productData['published'])){ $productData['published'] = 0;}
		unset($productData['categories']);
		$product =  new \Product($productData);
		$product->save();
		$product->categories()->sync(\Input::get('categories'));
		return \Redirect::to('cms/products')->with('message', 'Product saved successfully!');
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
		return \View::make('cms.products.show')->with('product' , $product);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$categories = \Category::all();
		$collections = \Collection::all();
		$taxes = \Tax::all();
		$product = \Product::find($id);
		return \View::make('cms.products.edit', array('product'=> $product,
			'categories'=> $categories,
			'collections' => $collections,
			'taxes' => $taxes
		));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$file = \Input::file('image');
		$productData = \Input::all();
		unset($productData['image']);
		if($file){
			$destinationPath = 'uploads/products/';
			$filename = $file->getClientOriginalName();
			$uploadSuccess = \Input::file('image')->move($destinationPath, $filename);
			$productData['image'] = $filename;
		}

		// if( $uploadSuccess ) {
		//    return \Response::json('success', 200);
		// } else {
		//    return \Response::json('error', 400);
		// }
		if(!isset($productData['premium'])){ $productData['premium'] = 0;}
		if(!isset($productData['published'])){ $productData['published'] = 0;}
		unset($productData['categories']);
		$product = \Product::find($id);
		$product->update($productData);

		$product->categories()->sync(\Input::get('categories'));
		

		return \Redirect::to('cms/products')->with('message', 'Product saved successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$product = \Product::find($id);
		$product->delete();
		return \Redirect::to('cms/products')->with('message', 'Product saved successfully!');
	}

	public function uploadImages($id)
	{
		$product = \Product::findOrFail($id);
		$file = \Input::file('file'); // your file upload input field in the form should be named 'file'

		$destinationPath = 'uploads/product-images';
		$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
		$uploadSuccess = \Input::file('file')->move($destinationPath, $filename);
		 
		if( $uploadSuccess ) {

			$image = new \ProductImage;
			$image->url = $filename;
			$product->gallery()->save($image);

		   return \Response::json('success', 200); // or do a redirect with some message that file was uploaded
		} else {
		   return \Response::json('error', 400);
		}
	}

}