@extends('cmsMaster')
@section('content')
	<h1>Products <a href="{{ URL::to('/cms/products/create'); }}" class="btn btn-success">Add new product</a></h1>


	<table class="table">
		<thead>
			<tr>
				<td>id</td>
				<td>Image</td>
				<td>Name</td>
				<!-- <td>Description</td> -->
				<td>Price</td>
				<td>Discount</td>
				<!-- <td>Tax</td> -->
				<td>Collection</td>
				<td>Categories</td>
				<td>Premium</td>
			</tr>
		</thead>
		<tbody>
		@foreach($products as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->image}}</td>
						<td>{{$product->name}}</td>
						<!-- <td>{{$product->description}}</td> -->
						<td>{{$product->price}}</td>
						<td>{{$product->discount}}</td>
						<!-- <td>{{$product->tax}}</td> -->
						<td>{{$product->collection->name}}</td>
						<td>@foreach($product->categories as $cat) <span class="label">{{$cat->name}}</span>  @endforeach</td>


						<td>
							<a class="btn btn-mini" href="{{ URL::to('/cms/products/'.$product->id); }}">Details</a>
							<a class="btn btn-mini" href="{{ URL::to('/cms/products/'.$product->id.'/edit'); }}">Edit</a>
							<a class="btn btn-mini btn-danger" method="DELETE" href="{{ URL::to('/cms/products/'.$product->id); }}">Remove</a>
						</td>
					</tr>
		@endforeach
		</tbody>
	</table>

@stop