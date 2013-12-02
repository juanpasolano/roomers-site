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
					{{ Form::text('name', $category->name, array('class' => 'input input-large en-flag')) }}
					{{ Form::text('name_de', $category->name_de, array('class' => 'input input-large de-flag')) }}
				</div>
			</div>

			<div class="control-group">
			<label for="description" class="control-label">Description</label>
				<div class="controls">
			{{ Form::textarea('description', $category->description, array('class' => 'input input-large en-flag')) }}
			{{ Form::textarea('description_de', $category->description_de, array('class' => 'input input-large de-flag')) }}
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

