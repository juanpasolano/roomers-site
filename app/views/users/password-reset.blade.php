{{Form::open(array('action' => 'UsersController@postResetPassword'))}}

	{{Form::hidden('token' , $token)}}
	
	{{Form::label('email')}}
	{{Form::email('email')}}

	{{Form::label('password')}}
	{{Form::password('password')}}

	{{Form::submit('go')}}

{{Form::close()}}