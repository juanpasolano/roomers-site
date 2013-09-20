@extends('frontMaster')
@section('content')
<div class="content clearfix">

	<div class="separatorDecor"></div>

		@yield('shopNav')


		<div class="rightContent">
			<h1>{{$title}}</h1>
			<div class="itemsContainer clearfix">


				@foreach($products as $product)
				<div class="productItemCard">
					<img src="{{asset('uploads/products/'.$product->image)}}" alt="">
					<div class="infoBox">
						<h3>{{$product->name}}</h3>
						<div class="number"><strong>€{{$product->price}}</strong> Each piece</div>
						<a href="#" data-id="{{$product->id}}" class="basicButton addToCartBtn">Add one</a>
						<a href="{{URL::to('shop/product/'.$product->id)}}" class="basicButton">Details</a>
					</div>
				</div>
				@endforeach


			</div>
		</div>
	</div>
@endsection