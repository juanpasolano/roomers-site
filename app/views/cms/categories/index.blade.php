@extends('cmsMaster')
@section('content')
	<h1>Categories</h1>
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Name</td>
				<td>Description</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($categories as $category)
					<tr>
						<td><strong>EN: </strong>{{$category->name}}<br/>
								<strong>DE: </strong>{{$category->name_de}}</td>
						<td><strong>EN: </strong>{{$category->description}}<br/>
								<strong>DE: </strong>{{$category->description_de}}</td>
						<td>
							<a class="btn btn-mini" href="{{ URL::to('/cms/categories/'.$category->id.'/edit'); }}">Edit</a>
							<form action="{{ URL::to('/cms/categories/'.$category->id); }}" method="POST" >
								<input type="hidden" name="_method" value="DELETE">
								<input type="submit" value="Remove" class="btn btn-mini btn-danger">
							</form>
						</td>
					</tr>
		@endforeach
		</tbody>
	</table>

	<hr class="bs-docs-separator">
	<div class="well span8 form-quick">
		<form action="{{URL::to('/cms/categories/')}}" method="POST" class="form-horizontal" id="createCategoryForm">
			<fieldset>
				<legend>Create a new category</legend>

				<div class="control-group">
					{{ Form::label('name', 'Name:', array('class'=>'control-label')) }}
					<div class="controls">
						{{ Form::text('name', '', array('class' => 'input input-midium en-flag')) }}
						{{ Form::text('name_de', '', array('class' => 'input input-midium de-flag')) }}
					</div>
				</div>


				<div class="control-group">
					{{ Form::label('description', 'Description:', array('class'=>'control-label')) }}
					<div class="controls">
						{{ Form::textarea('description', '', array('class' => 'input input-large en-flag')) }}
						{{ Form::textarea('description_de', '', array('class' => 'input input-large de-flag')) }}
					</div>
				</div>
				<hr class="bs-docs-separator">
				<div class="control-group">
					<div class="controls">
						<input type="submit" value="Create Category" class="btn btn-success">
					</div>
				</div>
			</fieldset>
		</form>
	</div>
@stop