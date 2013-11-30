<?php

class AddressesController extends BaseController {

	public function getIndex()
	{
		$user = Auth::user();
		if ($user) 
		{
			$user->load('addresses');
			return $user->addresses;
		}
		return 'err';
	}


	public function postCreate()
	{
		$address = new Address;
		$address->fill(Input::all());
		$user = Auth::user();
		if ($user) 
		{
			$user->addresses()->save($address);
			return 'ok';
		}
		return 'err';
	}

	public function putSetDefault($id)
	{
		$address = Address::find($id);
		$user = Auth::user();
		if ($address) 
		{
			$address->is_default = true;
			$user->addresses()->update(array('is_default' => false));
			$address->save();
			return 'ok';
		}
		return 'err';
	}

	public function putEdit($id)
	{
		$address = Address::find($id);
		if ($address) 
		{
			$address->fill(Input::all());
			$address->save();
			return 'ok';
		}
		return 'err';
	}

	public function deleteDelete($id)
	{
		$address = Address::find($id);
		if ($address) 
		{
			$address->delete();
			return 'ok';
		}
		return 'err';
	}

}
