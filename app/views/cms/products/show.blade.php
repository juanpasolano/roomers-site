@extends('cmsMaster')
@section('content')
<h1>Product details</h1>

	<h2 class="text-info">{{$product->name}}</h2>

		<h3>General information</h3>
					
					<form action="{{ URL::to('/cms/products/'.$product->id); }}" method="POST">
					<a class="btn btn-primary" href="{{ URL::to('/cms/products/'.$product->id.'/edit'); }}">Edit</a>
						<input type="hidden" name="_method" value="DELETE">
						<input type="submit" value="Remove" class="btn btn-danger">
					</form>

		<table class="table">
			<tbody>
				<tr>
					<td><strong>Name</strong></td>
					<td>{{$product->name}}</td>
				</tr>
				<tr>
					<td><strong>Image</strong></td>
					<td> <img src="{{asset('uploads/products/'.$product->image);}}" width="80" alt=""></td>
				</tr>
				<tr>
					<td><strong>Description</strong></td>
					<td>{{$product->description}}</td>
				</tr>
				<tr>
					<td><strong>Price</strong></td>
					<td>{{$product->price}}</td>
				</tr>
				<tr>
					<td><strong>Discount</strong></td>
					<td>{{$product->discount}}</td>
				</tr>
				<tr>
					<td><strong>Tax</strong></td>
					<td>{{$product->tax_id}}</td>
				</tr>
				<tr>
					<td><strong>Collections</strong></td>
					<td>{{$product->collection->name}}</td>
				<tr>
					<td><strong>Categories</strong></td>
					<td>@foreach($product->categories as $cat) <span class="label">{{$cat->name}}</span>  @endforeach</td>
				</tr>
				<tr>
					<td><strong>Premium</strong></td>
					<td>{{$product->premium}}</td>
				</tr>
				<tr>
					<td><strong>Published</strong></td>
					<td>{{$product->published}}</td>
				</tr>
			</tbody>
		</table>

	<div class="vidGallery clearfix well">
		<h3>Gallery images</h3>
		@foreach ($product->gallery as $element)
			<div class="galleryItem">
				{{HTML::image($element->url, $element->name , array('width' => 200 , 'height' => 200))}}
				<form action="{{ URL::to('/cms/product-images/'.$element->id); }}" method="POST">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="product_id" value="{{$product->id}}">
					<input type="submit" value="Remove" class="btn btn-danger btn-mini">
				</form>
			</div>
		@endforeach
	</div>
@stop