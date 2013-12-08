<?php

class OrderController extends BaseController {

	/*public function getProceed()
	{
		return View::make('orders.proceed');
	}*/

	public function postProceed()
	{
		$shipping_option = Input::get('shipping');
		$payment_option = Input::get('payment');
		$address = Input::get('address');

		$user = Auth::user();
		$products = Cart::contents();

		$order = new Order(array(
			'address_id'	=> $address,
			'shipping_option'	=> $shipping_option,
			'payment_option'	=> $payment_option
		));
		$items = array();

		$bruto_total = 0.0;
		$grand_total = 0.0;

		foreach ($products as $product) 
		{
			$data = $product->toArray();

			$item_price = ($data['price'] * $data['quantity']);
			$item_discount = ($item_price * ($data['discount'] / 100));
			$item_total = $item_price - $item_discount;
			$item_tax = ($item_total * ($data['tax_percentage'] / 100));

			$items[] = new OrderItem(array(
				'product'		=> $data['name'],
				'amount'		=> $data['quantity'],
				'unit_price'	=> $data['price'],
				'price'			=> $item_price,
				'tax'			=> $item_tax,
				'tax_name'		=> $data['tax_name'],
				'discount'		=> -$item_discount,
			));

			$bruto_total += $item_total;
			$grand_total += $item_total + $item_tax;
		}
		$order->bruto_total = $bruto_total;
		$order->grand_total = $grand_total;
		$order = $user->orders()->save($order);
		$order->items()->saveMany($items);

		Cart::destroy();

		return 'ok';

	}

}
