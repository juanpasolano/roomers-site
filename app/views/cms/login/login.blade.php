
{{ Form::open(array('route' => 'login.enter')) }}
	<ul>
		<li>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email') }}
		</li>

		<li>
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password') }}
		</li>

		{{Form::submit('go');}}
	</ul>
{{ Form::close() }}