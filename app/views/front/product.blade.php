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

				<div class="productSlider">
					<div class="item">
						<img src="assets/img/products/1b.jpg" height="420" width="750" alt="">
					</div>
				</div>

				<h2>{{$product->name}}</h2>

				<div class="col50">
					<h3>Descripcion</h3>
					<p>{{$product->description}}</p>
				</div>
				<div class="col25 colCentral">
					<h3>Dimensions</h3>
					<ul class="dimentions">
						<li>Height: <span>3"</span></li>
						<li>Width: <span>13"</span></li>
						<li>Depth: <span>2"</span></li>
					</ul>
				</div>
				<div class="col25 colCentral">
					<div class="price">
						<span class="number">€{{$product->price}}</span>
						<span class="txt">Each piece</span>
						<a href="" data-id="{{$product->id}}" class="basicButton addToCartBtn">Add to cart</a>
					</div>
				</div>
			</div>

		</div>


	</div><!-- end of content -->
@endsection