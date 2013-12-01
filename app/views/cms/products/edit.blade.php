@extends('cmsMaster')
@section('content')
	<h1>Products</h1>

	<h3>Edit product <span class="text-info">{{$product->name}}</span></h3>


	{{ Form::open(array('route' => 'cms.products.store' , 'files' => 'true')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name', $product->name) }}
		</li>

		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description', $product->description) }}
		</li>

		<li>
			{{ Form::label('image', 'Image:') }}
			{{ Form::text('image') }}
		</li>

		<li>
			<div id="fileInput">
			drag here
			</div>
		</li>

		<li>
			{{ Form::label('price', 'Price:') }}
			{{ Form::text('price') }}
		</li>

		<li>
			{{ Form::label('discount', 'Discount:') }}
			{{ Form::text('discount') }}
		</li>

		<li>
			{{ Form::label('category', 'Category:') }}
			{{ Form::text('category') }}
		</li>

		<li>
			{{ Form::label('collection', 'Collection:') }}
			{{ Form::text('collection') }}
		</li>

		<li>
			{{ Form::label('tax', 'Tax:') }}
			{{ Form::text('tax') }}
		</li>

		<li>
			{{ Form::label('premium', 'Premium:') }}
			{{ Form::text('premium') }}
		</li>

		<li>
			{{ Form::label('published', 'Published:') }}
			{{ Form::text('published') }}
		</li>

		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}

@stop

@section('scripts')
	{{HTML::script('js/dropzone.js')}}

	<script>
	(function()
	{
		$('#fileInput').dropzone({url: 'upload-images'});


	})();
	</script>
@stop