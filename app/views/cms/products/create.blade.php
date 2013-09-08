@extends('cmsMaster')
@section('content')
	<h1>Products</h1>

	Create a new product


	{{ Form::open(array('route' => 'cms.products.store', 'id'=>'createProductForm', 'files' => true)) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>

		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description') }}
		</li>

		<li>
			{{ Form::label('image', 'Image:') }}
			<input type="file" name="image" id="">
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
			<!-- {{ Form::select('categories', $categories) }} -->
			<select class="select selectMultiple" id="categories" name="categories" multiple="multiple">
				@foreach ($categories as $cat)
					<option value="{{$cat->id}}">{{$cat->name}}</option>
				@endforeach
			</select>
		</li>

		<li>
			{{ Form::label('collection_id', 'Collection:') }}

			<select class="select selectMultiple" id="collection_id" name="collection_id">
				@foreach ($collections as $coll)
					<option value="{{$coll->id}}">{{$coll->name}}</option>
				@endforeach
			</select>
		</li>

		<li>
			{{ Form::label('tax_id', 'Tax:') }}
			{{ Form::text('tax_id') }}
		</li>

		<li>
			{{ Form::label('premium', 'Premium:') }}
			<div class="make-switch switch-small"  data-on-label="YES" data-off-label="NO">
			    <input type="checkbox"  checked="checked" name="premium">
			</div>
		</li>

		<li>
			{{ Form::label('published', 'Published:') }}
			<div class="make-switch switch-small"  data-on-label="YES" data-off-label="NO">
			    <input type="checkbox"  checked="checked" name="published">
			</div>
		</li>

		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}

@stop