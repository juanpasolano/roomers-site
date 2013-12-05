<?php

namespace cms;
class DimensionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dimensions = \Dimension::all();
		return \View::make('cms.dimensions.index', array('dimensions'=> $dimensions));
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
		$dimension =  new \Dimension(\Input::all());
		$dimension->save();
		return \Redirect::to('cms/dimensions')->with('message', 'Dimension saved successfully!');
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
		$dimension = \Dimension::find($id);
		return \View::make('cms.dimensions.edit', array('dimension'=> $dimension));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$dimensionData = \Input::all();
		$dimension = \Dimension::find($id);
		$dimension->update($dimensionData);
		return \Redirect::to('cms/dimensions')->with('message', 'Dimension updated!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$dimension = \Dimension::find($id);
		$dimension->delete();
		return \Redirect::to('cms/dimensions')->with('message', 'Dimension deleted!');
	}

}
