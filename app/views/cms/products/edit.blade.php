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
			{{ Form::label('image', 'Primary image:', array('class'=>'control-label')) }}
	<div class="controls">

			<input type="file" name="image" id=""> <br/>
			<img src="{{asset('uploads/products/'.$product->image);}}" width="200" alt="">
			{{$product->image}}
	</div>
</div>
	


			<div id="fileInput" class="well dropzone">
				<h3>Drag the rest of the images of your product here</h3>
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
			<div class="make-switch switch-small"  data-on-label="YES" data-off-label="NO">
			    <input type="checkbox" @if($product->premium) checked="checked"  @endif name="premium" value="1">
			</div>
	</div>
</div>


<div class="control-group">
			{{ Form::label('published', 'Published:', array('class'=>'control-label')) }}
	<div class="controls">
			<div class="make-switch switch-small"  data-on-label="YES" data-off-label="NO">
			    <input type="checkbox" @if($product->published) checked="checked"  @endif name="published" value="1">
			</div>
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
