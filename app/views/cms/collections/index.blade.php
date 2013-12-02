@extends('cmsMaster')
@section('content')
	<h1>Collections</h1>
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Image</td>
				<td>Name</td>
				<td>Description</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($collections as $collection)
					<tr>
						<td><img src="{{asset('uploads/collections/'.$collection->image);}}" width="200" alt=""></td>
						<td><strong>EN: </strong>{{$collection->name}}<br/>
								<strong>DE: </strong>{{$collection->name_de}}</td>
						<td><strong>EN: </strong>{{$collection->description}}<br/>
								<strong>DE: </strong>{{$collection->description_de}}</td>
						<td>
							<a class="btn btn-mini" href="{{ URL::to('/cms/collections/'.$collection->id.'/edit'); }}">Edit</a>
							<form action="{{ URL::to('/cms/collections/'.$collection->id); }}" method="POST" >
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
		<form action="{{URL::to('/cms/collections/')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
						<fieldset>
				<legend>Create a new collection</legend>

				<div class="control-group">
					{{ Form::label('image', 'Image:', array('class'=>'control-label')) }}
					<div class="controls">
							<input type="file" name="image" id=""> <br/>
					</div>
				</div>

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
						<input type="submit" value="Create Collection" class="btn btn-success">
					</div>
				</div>
			</fieldset>
		</form>
	</div>
@stop