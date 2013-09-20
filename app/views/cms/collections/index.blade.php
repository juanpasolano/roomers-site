@extends('cmsMaster')
@section('content')
	<h1>Collections</h1>
	<table class="table">
		<thead>
			<tr>
				<td>id</td>
				<td>Image</td>
				<td>Name</td>
				<td>Description</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($collections as $collection)
					<tr>
						<td>{{$collection->id}}</td>
						<td>{{$collection->image}}</td>
						<td>{{$collection->name}}</td>
						<td>{{$collection->description}}</td>
						<td>
							<a class="btn btn-mini" href="{{ URL::to('/cms/collections/'.$collection->id.'/edit'); }}">Edit</a>
							<a class="btn btn-mini btn-danger" method="DELETE" href="{{ URL::to('/cms/collections/'.$collection->id); }}">Remove</a>
						</td>
					</tr>
		@endforeach
		</tbody>
	</table>

	<hr class="bs-docs-separator">
	<div class="well span4">
		<form action="#" class="form" id="createCollectionForm">
			<fieldset>
				<legend>Create a new collection</legend>
				<label for="name">Name</label>
				<input type="text" class="input-xlarge " name="name" id="name">
				<label for="description">Description</label>
				<textarea name="description" id="description" cols="30" rows="5"></textarea>
				<hr class="bs-docs-separator">
				<p class="loadMsg" style="display:none">Saving new collection...</p>
				<input type="submit" value="SAVE" class="btn btn-success">
			</fieldset>
		</form>
	</div>
@stop