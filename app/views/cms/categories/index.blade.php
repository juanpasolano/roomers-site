@extends('cmsMaster')
@section('content')
	<h1>Categories</h1>
	<table class="table">
		<thead>
			<tr>
				<td>id</td>
				<td>Name</td>
				<td>Description</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($categories as $category)
					<tr>
						<td>{{$category->id}}</td>
						<td>{{$category->name}}</td>
						<td>{{$category->description}}</td>
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
	<div class="well span4">
		<form action="{{URL::to('/cms/categories/')}}" method="POST" class="form" id="createCategoryForm">
			<fieldset>
				<legend>Create a new category</legend>
				<label for="name">Name</label>
				<input type="text" class="input-xlarge " name="name" id="name">
				<label for="description">Description</label>
				<textarea name="description" id="description" cols="30" rows="5"></textarea>
				<hr class="bs-docs-separator">
				<p class="loadMsg" style="display:none">Saving new category...</p>
				<input type="submit" value="SAVE" class="btn btn-success">
			</fieldset>
		</form>
	</div>
@stop