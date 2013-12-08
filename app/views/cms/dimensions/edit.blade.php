@extends('cmsMaster')
@section('content')
<h1>Dimensions</h1>

<h3>Edit dimension <span class="text-info">{{$dimension->name}}</span></h3>


{{ Form::open(array('route' => array('cms.dimensions.update', $dimension->id), 'method' => 'PATCH' , 'files' => 'true', 'class' =>'form-horizontal'), array()) }}

<fieldset>

	<div class="control-group">
		{{ Form::label('name', 'Name:', array('class'=>'control-label')) }}
		<div class="controls">
			{{ Form::text('name', $dimension->name, array('class' => 'input input-large')) }}
		</div>
	</div>

		<div class="form-actions">
			{{ Form::submit('Save changes', array('class'=>"btn btn-primary")) }}
			<a href="{{URL::to('cms/dimensions')}}" class="btn">Cancel</a>
		</div>
</fieldset>

	{{ Form::close() }}
@stop