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
				<td>Premium</td>
				<td>Collection</td>
				<td>Categories</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($products as $product)
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
							<a class="btn btn-mini btn-block" href="{{ URL::to('/cms/products/'.$product->id); }}">Details</a>
							<a class="btn btn-mini btn-block" href="{{ URL::to('/cms/products/'.$product->id.'/edit'); }}">Edit</a>
							<form action="{{ URL::to('/cms/products/'.$product->id); }}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="submit" value="Remove" class="btn btn-danger btn-mini btn-block">
							</form>

						</td>
					</tr>
		@endforeach
		</tbody>
	</table>

@stop