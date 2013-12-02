<?php 

class SiteController extends BaseController {
	
	public function __construct()
	{

	}

	public function index()
	{
		$collections = Collection::orderBy('updated_at', 'desc')->get()->all();
		$products = Product::where('premium', "=", '1')->get()->all();
		return View::make('front.index', array('collections'=>$collections, 'products'=>$products));
	}
}