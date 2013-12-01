@extends('cmsMaster')
@section('content')
	<h1>Products</h1>

	<h3>Edit product <span class="text-info">{{$product->name}}</span></h3>


	{{ Form::open(array('route' => array('cms.products.update', $product->id), 'method' => 'PATCH' , 'files' => 'true', 'class' =>'form-horizontal'), array()) }}
	
		<fieldset>

			<div class="control-group">
				{{ Form::label('name', 'Name:', array('class'=>'control-label')) }}
				<div class="controls">
					{{ Form::text('name', $product->name, array('class' => 'input input-xlarge')) }}
				</div>
			</div>
	
<div class="control-group">
	{{ Form::label('description', 'Description:', array('class'=>'control-label')) }}
	<div class="controls">
		{{ Form::textarea('description', $product->description, array('class' => 'input input-xlarge')) }}
	</div>
</div>

<div class="control-group">
			{{ Form::label('image', 'Image:', array('class'=>'control-label')) }}
	<div class="controls">
			{{ Form::text('image', $product->image) }}
			
			<input type="file" name="image" id="">
	</div>
</div>
	

	

			<div id="fileInput" class="btn btn-large btn-primary">
			drag here
			</div>
	


<div class="control-group">
			{{ Form::label('price', 'Price:', array('class'=>'control-label')) }}
	<div class="controls">
			{{ Form::text('price', $product->price) }}
	</div>
</div>
	
<div class="control-group">
			{{ Form::label('discount', 'Discount:', array('class'=>'control-label')) }}
	<div class="controls">
			{{ Form::text('discount', $product->discount) }}
	</div>
</div>
	
<div class="control-group">
			{{ Form::label('collection', 'Collection:', array('class'=>'control-label')) }}
	<div class="controls">
	<select class="select" id="collection_id" name="collection_id">
		@foreach ($collections as $coll)
			<option value="{{$coll->id}}" <?php if($product->collection->id == $coll->id){echo 'selected';} ?> >{{$coll->name}} </option>
		@endforeach
	</select>
	</div>
</div>

	
	
<div class="control-group">
	{{ Form::label('category', 'Category:', array('class'=>'control-label')) }}
	<div class="controls">
		<select class="select " id="categories" name="categories[]" multiple="multiple">
			@foreach ($categories as $cat)
				<option value="{{$cat->id}}" 

				@foreach ($product->categories as $category)
					@if($category->id == $cat->id) selected @endif
				@endforeach

				>{{$cat->name}}</option>
			@endforeach
		</select>
	</div>
</div>
	
<div class="control-group">
			{{ Form::label('tax', 'Tax:', array('class'=>'control-label')) }}
	<div class="controls">
	<select class="select" id="tax_id" name="tax_id">
		@foreach ($taxes as $tax)
			<option value="{{$tax->id}}" <?php if($product->tax->id == $tax->id){echo 'selected';} ?> >{{$tax->name}} </option>
		@endforeach
	</select>
	</div>
</div>


<div class="control-group">
			{{ Form::label('premium', 'Premium:', array('class'=>'control-label')) }}
	<div class="controls">
			{{ Form::text('premium', $product->premium) }}
	</div>
</div>


<div class="control-group">
			{{ Form::label('published', 'Published:', array('class'=>'control-label')) }}
	<div class="controls">
			{{ Form::text('published', $product->published) }}
	</div>
</div>
	

			{{ Form::submit() }}
		</fieldset>
	
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
