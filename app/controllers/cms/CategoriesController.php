<?php

namespace cms;

class CategoriesController extends \BaseController {


	public function __construct()
	{
		$this->beforeFilter('admin-auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = \Category::all();
		return \View::make('cms.categories.index', array('categories'=> $categories));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$category =  new \Category(\Input::all());
		$category->save();
		return \Redirect::to('cms/categories')->with('message', 'Product saved successfully!');
		//return \Response::json($category,200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = \Category::find($id);
		return \View::make('cms.categories.edit', array('category'=> $category));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$categoryData = \Input::all();
		$category = \Category::find($id);
		$category->update($categoryData);
		return \Redirect::to('cms/categories')->with('message', 'Category updated!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category = \Category::find($id);
		$category->delete();
		return \Redirect::to('cms/categories')->with('message', 'Category deleted!');
	}

}
