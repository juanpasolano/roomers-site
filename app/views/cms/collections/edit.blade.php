@extends('cmsMaster')
@section('content')

	<h1>Collections</h1>

	<h3>Edit collection <span class="text-info">{{$collection->name}}</span></h3>

{{ Form::open(array('route' => array('cms.collections.update', $collection->id), 'method' => 'PATCH' , 'files' => 'true', 'class' =>'form-horizontal'), array()) }}

		<fieldset>

	<div class="control-group">
		{{ Form::label('image', 'Image:', array('class'=>'control-label')) }}
		<div class="controls">

			<input type="file" name="image" id=""> <br/>
			<img src="{{asset('uploads/collections/'.$collection->image);}}" width="200" alt="">
			{{$collection->image}}
		</div>
	</div>

			<div class="control-group">
			<label for="name" class="control-label">Name</label>
				<div class="controls">
					{{ Form::text('name', $collection->name, array('class' => 'input input-large en-flag')) }}
					{{ Form::text('name_de', $collection->name_de, array('class' => 'input input-large de-flag')) }}
				</div>
			</div>

			<div class="control-group">
			<label for="description" class="control-label">Description</label>
				<div class="controls">
			{{ Form::textarea('description', $collection->description, array('class' => 'input input-large en-flag')) }}
			{{ Form::textarea('description_de', $collection->description_de, array('class' => 'input input-large de-flag')) }}
				</div>
			</div>


			<div class="control-group">
				<div class="controls">
					<input type="submit" class="btn btn-large btn-primary" value="Update">
					<a href="{{URL::to('/cms/collections/')}}" class="btn">Cancel</a>
				</div>
			</div>

		</fieldset>

	</form>

@stop