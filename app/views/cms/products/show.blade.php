@extends('cmsMaster')
@section('content')
<h1>{{$product->id}}</h1>


	<table class="table">
		<thead>
			<tr>
				<td>id</td>
				<td>Image</td>
				<td>Name</td>
				<!-- <td>Description</td> -->
				<td>Price</td>
				<td>Discount</td>
				<td>Premium</td>
				<td>Collection</td>
				<td>Categories</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		
					<tr>
						<td>{{$product->id}}</td>
						<td> <img src="{{asset('uploads/products/'.$product->image);}}" width="80" alt=""></td>
						<td>{{$product->name}}</td>
						<!-- <td>{{$product->description}}</td> -->
						<td>{{$product->price}}</td>
						<td>{{$product->discount}}</td>
						<td>{{$product->premium}}</td>
						<td>{{$product->collection->name}}</td>
						<td>@foreach($product->categories as $cat) <span class="label">{{$cat->name}}</span>  @endforeach</td>
						<td>
							
							<a class="btn btn-mini" href="{{ URL::to('/cms/products/'.$product->id.'/edit'); }}">Edit</a>
							<form action="{{ URL::to('/cms/products/'.$product->id); }}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="submit" value="Remove">
							</form>

						</td>
					</tr>

		</tbody>
	</table>

	<div class="vidGallery">
		@foreach ($product->gallery as $element)
			<div class="galleryItem">
				{{HTML::image($element->url, $element->name , array('width' => 200 , 'height' => 200))}}
			</div>
		@endforeach
	</div>
@stop