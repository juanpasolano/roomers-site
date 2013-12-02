<?php

namespace cms;

class TaxesController extends \BaseController {


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
		$taxes = \Tax::all();
		return \View::make('cms.taxes.index', array('taxes'=> $taxes));
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
		$tax =  new \Tax(\Input::all());
		$tax->save();
		return \Redirect::to('cms/taxes')->with('message', 'Product saved successfully!');
		//return \Response::json($tax,200);
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
		$tax = \Tax::find($id);
		return \View::make('cms.taxes.edit', array('tax'=> $tax));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$taxData = \Input::all();
		$tax = \Tax::find($id);
		$tax->update($taxData);
		return \Redirect::to('cms/taxes')->with('message', 'Tax updated!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tax = \Tax::find($id);
		$tax->delete();
		return \Redirect::to('cms/taxes')->with('message', 'Category deleted!');
	}

}
