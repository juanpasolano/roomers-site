@extends('cmsMaster')
@section('content')
	<h1>Taxes</h1>
	<table class="table">
		<thead>
			<tr>
				<td>id</td>
				<td>Name</td>
				<td>Percentage</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($taxes as $tax)
					<tr>
						<td>{{$tax->id}}</td>
						<td>{{$tax->name}}</td>
						<td>{{$tax->percentage}}%</td>
						<td>
							<a class="btn btn-mini" href="{{ URL::to('/cms/taxes/'.$tax->id.'/edit'); }}">Edit</a>
							<form action="{{ URL::to('/cms/taxes/'.$tax->id); }}" method="POST" >
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

		<form action="{{URL::to('/cms/taxes/')}}" method="POST" class="form-horizontal">
			<fieldset>
				<legend>Create a new tax</legend>
				<label for="name">Name</label>
				<input type="text" class="input-xlarge " name="name" id="name">
				<label for="percentage">Percenteage</label>
				<div class="input-append">
				  <input type="text" class="input-small" name="percentage" id="percentage">
				  <span class="add-on">%</span>
				</div>
				<hr class="bs-docs-separator">
				<p class="loadMsg" style="display:none">Saving new tax...</p>
				<input type="submit" value="SAVE" class="btn btn-success">
			</fieldset>
		</form>
	</div>
@stop