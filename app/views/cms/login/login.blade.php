<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>

	<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
	<link href="{{asset('css/cms.css');}}" rel="stylesheet">

</head>
<body>
{{ Form::open(array('route' => 'login.enter', 'class'=>'form-signin')) }}
<h2 class="form-signin-heading">Please sign in</h2>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email',null, array('class'=>'input-block-level')) }}
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password', array('class'=>'input-block-level')) }}

			{{Form::submit('Enter', array('class'=>'btn btn-large btn-primary'))}}

{{ Form::close() }}

</body>