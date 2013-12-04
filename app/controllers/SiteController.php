<?php 

class SiteController extends BaseController {
	
	public function __construct()
	{

	}

	public function index()
	{
		// App::setLocale('de');
		$collections = Collection::orderBy('updated_at', 'desc')->get()->all();
		$products = Product::where('premium', "=", '1')->get()->all();
		return View::make('front.index', array('collections'=>$collections, 'products'=>$products));
	}

	public function setLocale($lang)
	{
		switch ($lang) {
			case 'en':
				Session::put('lang', 'en');
				return Redirect::back();
				break;

			case 'de':
				Session::put('lang', 'de');
				return Redirect::back();
				break;
			
			default:
				# code...
				break;
		}
	}
}