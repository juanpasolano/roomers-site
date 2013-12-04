@extends('cmsMaster')
@section('content')
	<h1>Dimensions</h1>
	<table class="table">
		<thead>
			<tr>
				<td>id</td>
				<td>Name</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($dimensions as $dimension)
					<tr>
						<td>{{$dimension->id}}</td>
						<td>{{$dimension->name}}</td>
						<td>
							<a class="btn btn-mini" href="{{ URL::to('/cms/dimensions/'.$dimension->id.'/edit'); }}">Edit</a>
							<form action="{{ URL::to('/cms/dimensions/'.$dimension->id); }}" method="POST" >
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

		<form action="{{URL::to('/cms/dimensions/')}}" method="POST" class="form-horizontal">
			<fieldset>
				<legend>Create a new dimension</legend>
				<label for="name">Name</label>
				<input type="text" class="input-xlarge " name="name" id="name">
				<hr class="bs-docs-separator">
				<input type="submit" value="SAVE" class="btn btn-success">
			</fieldset>
		</form>
	</div>
@stop