<?php
namespace cms;
class CollectionsController extends \BaseController {


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
		$collections = \Collection::all();
		return \View::make('cms.collections.index', array('collections'=> $collections));
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
		$file = \Input::file('image');
		$collectionData = \Input::all();
		unset($collectionData['image']);
		if($file){
			$destinationPath = 'uploads/collections/';
			$filename = $file->getClientOriginalName();
			$uploadSuccess = \Input::file('image')->move($destinationPath, $filename);
			$collectionData['image'] = $filename;
		}
		$collection =  new \Collection($collectionData);
		$collection->save();
		 return \Redirect::to('cms/collections')->with('message', 'Product saved successfully!');
		//return \Response::json($collection,200);
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
		$collection = \Collection::find($id);
		return \View::make('cms.collections.edit', array('collection'=> $collection));
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
		$collectionData = \Input::all();
		unset($collectionData['image']);
		if($file){
			$destinationPath = 'uploads/collections/';
			$filename = $file->getClientOriginalName();
			$uploadSuccess = \Input::file('image')->move($destinationPath, $filename);
			$collectionData['image'] = $filename;
		}
		$collection = \Collection::find($id);
		$collection->update($collectionData);
		return \Redirect::to('cms/collections')->with('message', 'Product saved successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$collection = \Collection::find($id);
		$collection->delete();
		return \Redirect::to('cms/collections')->with('message', 'Category deleted!');
	}

}
