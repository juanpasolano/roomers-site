@extends('cmsMaster')
@section('content')
	
	<h1>Categories</h1>

	<h3>Edit category <span class="text-info">{{$category->name}}</span></h3>

	<form action="{{URL::to('/cms/categories/'.$category->id)}}" class="form-horizontal" method="POST">
		<input type="hidden" name="_method" value="PUT">

		<fieldset>
			<div class="control-group">
			<label for="name" class="control-label">Name</label>
				<div class="controls">
					<input type="text" id="name" name="name" value="{{$category->name}}" class="input-block-level">
				</div>
			</div>

			<div class="control-group">
			<label for="description" class="control-label">Description</label>
				<div class="controls">
					<textarea type="text" class="input-block-level" rows="10" id="description" name="description">{{$category->description}}</textarea>
				</div>
			</div>


			<div class="control-group">
				<div class="controls">
					<input type="submit" class="btn btn-large btn-primary" value="Update">
					<a href="{{URL::to('/cms/categories/')}}" class="btn">Cancel</a>
				</div>
			</div>

		</fieldset>

	</form>

@stop

