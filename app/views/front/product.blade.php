@extends('frontMaster')
@section('content')
<div class="content clearfix">

	<div class="separatorDecor"></div>

		@yield('shopNav')

		<div class="rightContent">

			<div class="productDetailBox">

				<!-- <div class="breadCrums">
					<ul>
						<li><a href="#">New arrivals</a></li>
						<li><a href="#">Lorem ipsum</a></li>
						<li>Name of product</li>
					</ul>
				</div> -->
				@if(!$product->gallery->isEmpty())
					<div class="productSlider">
						<div class="items">
						@foreach($product->gallery as $image)
							<img src="{{$image->url}}" alt="">
						@endforeach
						</div>
						<a href="#" class="control next">Next</a>
						<a href="#" class="control prev">Prev</a>
					</div>
				@endif

				<h2>{{$product->name}}</h2>

				<div class="col50">
					<h3>Descripcion</h3>
					<p>{{$product->description}}</p>
				</div>
				<div class="col25 colCentral">
					<h3>Dimensions</h3>
					<ul class="dimentions">

						@foreach($product->dimensions as $dimension)
						<li><strong>{{$dimension->name}}:</strong>  <span>{{$dimension->pivot->value}}</span></li>
						@endforeach
					</ul>
				</div>
				<div class="col25 colCentral">
					<div class="price">
						@if($product->discount != 0)
							<span class="number">€{{$product->price-(($product->discount*$product->price)/100)}}</span>
							<span class="before">€{{$product->price}}</span>
						@else
							<span class="number">€{{$product->price}}</span>
						@endif
						<span class="txt">Each piece</span>
						<a href="" data-id="{{$product->id}}" class="basicButton addToCartBtn">Add to cart</a>
					</div>
				</div>
			</div>

		</div>


	</div><!-- end of content -->
@endsection