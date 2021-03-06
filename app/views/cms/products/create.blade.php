@extends('cmsMaster')
@section('content')
<h1>Products</h1>

<h2>Create a new product</h2>


{{ Form::open(array('route' => 'cms.products.store', 'id'=>'createProductForm', 'files' => true, 'class'=>'form-horizontal')) }}

<fieldset>
	<div class="control-group">
		{{ Form::label('name', 'Name:', array('class'=>'control-label')) }}
		<div class="controls">
			{{ Form::text('name', '', array('class' => 'input input-large en-flag')) }}
			{{ Form::text('name_de', '', array('class' => 'input input-large de-flag')) }}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('description', 'Description:', array('class'=>'control-label')) }}
		<div class="controls">
			{{ Form::textarea('description', '', array('class' => 'input input-large en-flag')) }}
			{{ Form::textarea('description_de', '', array('class' => 'input input-large de-flag')) }}
		</div>
	</div>

		<div class="control-group">
		{{ Form::label('dimensions', 'Dimensions:', array('class'=>'control-label')) }}
		<div class="controls">

			<div class="dimensionsBox">

			</div>

			<div class="dimensionItem dimensionClone" style="display:none">
						<select class="select input" id="" name="">
							@foreach ($dimensions as $dim)
								<option value="{{$dim->id}}" >{{$dim->name}} </option>
							@endforeach
						</select>

						{{ Form::text('', '', array('class' => 'input input-midium')) }}
						<a href="javascript:;" class="btn btn-mini btn-danger removeDimension">Remove</a>
			</div>

			<a href="javascript:;" class="btn btn-success addDimension">Add new dimension</a>

		</div>
	</div>



	<div class="control-group">
		{{ Form::label('image', 'Primary image:', array('class'=>'control-label')) }}
		<div class="controls">

			<input type="file" name="image" id="">
		</div>
	</div>



	<div id="fileInput" class="well dropzone">
		<h3>Drag the rest of the images of your product here</h3>
	</div>



	<div class="control-group">
		{{ Form::label('price', 'Price:', array('class'=>'control-label')) }}
		<div class="controls">
		<div class="input-prepend">
		  <span class="add-on">€</span>
			{{ Form::text('price') }}
		</div>
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('discount', 'Discount:', array('class'=>'control-label')) }}
		<div class="controls">
		<div class="input-append">
			{{ Form::text('discount') }}
		  <span class="add-on">%</span>
		</div>
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('collection', 'Collection:', array('class'=>'control-label')) }}
		<div class="controls">
			<select class="select" id="collection_id" name="collection_id">
				@foreach ($collections as $coll)
				<option value="{{$coll->id}}" >{{$coll->name}} </option>
				@endforeach
			</select>
		</div>
	</div>



	<div class="control-group">
		{{ Form::label('category', 'Category:', array('class'=>'control-label')) }}
		<div class="controls">
			<select class="select " id="categories" name="categories[]" multiple="multiple">
				@foreach ($categories as $cat)
				<option value="{{$cat->id}}" >{{$cat->name}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('tax', 'Tax:', array('class'=>'control-label')) }}
		<div class="controls">
			<select class="select" id="tax_id" name="tax_id">
				@foreach ($taxes as $tax)
				<option value="{{$tax->id}}" >{{$tax->name}} </option>
				@endforeach
			</select>
		</div>
	</div>


	<div class="control-group">
		{{ Form::label('premium', 'Premium:', array('class'=>'control-label')) }}
		<div class="controls">
			<div class="make-switch switch-small"  data-on-label="YES" data-off-label="NO">
				<input type="checkbox"  checked="checked" name="premium" value="1">
			</div>
		</div>
	</div>


	<div class="control-group">
		{{ Form::label('published', 'Published:', array('class'=>'control-label')) }}
		<div class="controls">
			<div class="make-switch switch-small"  data-on-label="YES" data-off-label="NO">
				<input type="checkbox" checked="checked" name="published" value="1">
			</div>
		</div>
	</div>

		<div class="form-actions">
			{{ Form::submit('Save product', array('class'=>"btn btn-primary")) }}
			<a href="{{URL::to('cms/products')}}" class="btn">Cancel</a>
		</div>
</fieldset>
{{ Form::close() }}

@stop