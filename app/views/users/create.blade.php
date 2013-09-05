@section('content')
	{{ Form::open(array('route' => 'users.store')) }}
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
			{{ Form::label('address', 'Address:') }}
			{{ Form::text('address') }}
			{{ Form::label('phone', 'Phone:') }}
			{{ Form::text('phone') }}
			{{ Form::submit() }}
{{ Form::close() }}
@endsection