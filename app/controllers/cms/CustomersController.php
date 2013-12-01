<?php

namespace cms;

class CustomersController extends \BaseController {

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
		// dd(Customer::all());
		// return Response::json(Customer::all(), 200);
		// return Response::json(Customer::with('orders')->get());
		$customers = \User::with('orders')->get()->all();
		return \View::make('cms.customers.index', array('customers'=> $customers));
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
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('cms.customers.show', array('customer'=>Customer::with('orders')->find($id)));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
		//
	}


	public function getOrders($id)
	{
		$orders = \Customer::find($id)->orders;
		return \Response::json($orders);
		dd('ordes form this user'. $id);
	}

}