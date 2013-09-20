@extends('frontMaster')
@section('content')
		<div class="slider">
		<div class="item active">
			<img src="img/slider/1.jpg" height="335" width="1000" alt="name of slider">
			<div class="infoBox">
				<span class="text">New collection has arrived</span>
				<a href="" class="link">See the details</a>
			</div>
		</div>
		<div class="item">
			<img src="http://lorempixel.com/1000/335/abstract" height="335" width="1000" alt="name of slider">
			<div class="infoBox">
				<span class="text">Lorem ipsum dolor sit amet</span>
				<a href="" class="link">See the details</a>
			</div>
		</div>
		<div class="item">
			<img src="http://lorempixel.com/1000/336/abstract" height="335" width="1000" alt="name of slider">
			<div class="infoBox">
				<span class="text">Lorem ipsum dolor sit amet</span>
				<a href="" class="link">See the details</a>
			</div>
		</div>
		<a href="#" class="next">Next</a>
		<a href="#" class="prev">Prev</a>
	</div>


	<div class="content">

		<div class="separatorDecor"></div>


		<div class="homeCollections clearfix">
			<h1>Latest Collections</h1>


			<!-- *********** -->
			<!-- COLLECTIONS -->

			@foreach($collections as $coll)
			<a href="#" class="item itemLeft">
				<img src="uploads/collections/{{$coll->image}}" height="400" width="490" alt="name of collection">
				<div class="info">
					<h2>{{$coll->name}}</h2>
					<p>{{$coll->description}}<br>
					<em>Updated: {{$coll->updated_at}}</em></p>
				</div>
			</a>
			@endforeach
		</div>

		<div class="separatorDecor"></div>
		<div class="premuim clearfix">
			<h1>Featured Products</h1>
			@foreach($products as $product)
				<div class="item">
					<h2>{{$product->name}}</h2>
					<div class="imgFrame"><img src="uploads/products/{{$product->image}}" height="250" width="440" alt="productName"></div>
					<p>{{$product->description}}</p>
					<div class="priceBox">
						<span class="number">€{{$product->price}}</span>
						<span class="txt">Each piece</span>
					</div>
					<div class="btnsBox">
						<a href="#" class="basicButton fr">More info</a>
						<a href="{{URL::to('cart/addItem/')}}" data-id="{{$product->id}}" class="basicButton fr addToCartBtn">Add to cart</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@stop