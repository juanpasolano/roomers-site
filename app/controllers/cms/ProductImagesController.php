<?php

class ProductImagesController extends BaseController {

	/**
	 * ProductImage Repository
	 *
	 * @var ProductImage
	 */
	protected $productImage;

	public function __construct(ProductImage $productImage)
	{
		$this->productImage = $productImage;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productImages = $this->productImage->all();

		return View::make('productImages.index', compact('productImages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('productImages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, ProductImage::$rules);

		if ($validation->passes())
		{
			$this->productImage->create($input);

			return Redirect::route('productImages.index');
		}

		return Redirect::route('productImages.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$productImage = $this->productImage->findOrFail($id);

		return View::make('productImages.show', compact('productImage'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$productImage = $this->productImage->find($id);

		if (is_null($productImage))
		{
			return Redirect::route('productImages.index');
		}

		return View::make('productImages.edit', compact('productImage'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, ProductImage::$rules);

		if ($validation->passes())
		{
			$productImage = $this->productImage->find($id);
			$productImage->update($input);

			return Redirect::route('productImages.show', $id);
		}

		return Redirect::route('productImages.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->productImage->find($id)->delete();

		return Redirect::route('cms.products.show', Input::get('product_id'));
	}

}
