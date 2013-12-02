@extends('cmsMaster')
@section('content')
<h1>Taxes</h1>

<h3>Edit tax <span class="text-info">{{$tax->name}}</span></h3>


{{ Form::open(array('route' => array('cms.taxes.update', $tax->id), 'method' => 'PATCH' , 'files' => 'true', 'class' =>'form-horizontal'), array()) }}

<fieldset>

	<div class="control-group">
		{{ Form::label('name', 'Name:', array('class'=>'control-label')) }}
		<div class="controls">
			{{ Form::text('name', $tax->name, array('class' => 'input input-large')) }}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('percentage', 'Percentage:', array('class'=>'control-label')) }}
		<div class="controls">
			{{ Form::text('percentage', $tax->percentage, array('class' => 'input input-large')) }}
		</div>
	</div>


		<div class="form-actions">
			{{ Form::submit('Save changes', array('class'=>"btn btn-primary")) }}
			<a href="{{URL::to('cms/taxes')}}" class="btn">Cancel</a>
		</div>
</fieldset>

	{{ Form::close() }}
@stop