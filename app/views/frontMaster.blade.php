<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=1024, maximum-scale=2" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
	<meta name="description" content="Description" />
	<meta name="keywords" content="Keywords" />
	<meta name="author" content="imaginamos.com">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 month">
	<title></title>

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Arapey:400italic,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700' rel='stylesheet' type='text/css'>

<link href="{{asset('css/bootstrap.css');}}" rel="stylesheet">
<link href="{{asset('css/mainStyles.css');}}" rel="stylesheet">



</head>
<body>

<header>
	<div class="logo"><img src="{{asset('img/headerLogo.png');}}" height="128" width="129" alt=""></div>
	<nav class="header">
		<ul>
			<li class=""><a href="{{URL::to('/')}}">{{trans('messages.home')}}</a></li>
			<li class=""><a href="{{URL::to('shop')}}">{{trans('messages.shop')}}</a></li>
			<!-- <li><a href="">Premium products</a></li> -->
			<li><a href="">{{trans('messages.about')}}</a></li>
			<li><a href="">{{trans('messages.services')}}</a></li>
			<li><a href="">{{trans('messages.contact')}}</a></li>
		</ul>
	</nav>
	<nav class="header header-fixed">
		<ul>
			<li class=""><a href="{{URL::to('/')}}">{{trans('messages.home')}}</a></li>
			<li class=""><a href="{{URL::to('shop')}}">{{trans('messages.shop')}}</a></li>
			<!-- <li><a href="">Premium products</a></li> -->
			<li><a href="">{{trans('messages.about')}}</a></li>
			<li><a href="">{{trans('messages.services')}}</a></li>
			<li><a href="">{{trans('messages.contact')}}</a></li>
		</ul>
	</nav>
</header>

<div class="accountWidget">
	<div class="shown">
	@if (Auth::check())
		Hi,  {{Auth::user()->firstname}} {{Auth::user()->lastname}}<br>
		<a href="{{action('UsersController@getUserDetails' , Auth::user()->id)}}">{{trans('messages.cart.profile')}}</a><br>
		<a href="{{url('logout')}}">{{trans('messages.cart.signOut')}}</a><br>
	@endif


		<!-- You are not logged in<br> -->
		@if(Auth::guest())
		<a href="#loginModal" role="button" data-toggle="modal">{{trans('messages.cart.logIn')}}</a><br>
		<a href="{{action('UsersController@getRegister')}}">{{trans('messages.cart.createAccount')}}</a>
		@endif
		<a href="#" class="cartBtn">{{Cart::totalItems()}} items</a><br>
	</div>
	<div class="hidden">
		<a href="orderMake.php" class="btn btn-fucsia pull-right">{{trans('messages.cart.table.continue')}}</a>
		<div class="separator"></div>
		<table class="table">
			<thead>
				<tr>
					<th>{{trans('messages.cart.table.article')}}</th>
					<th>No</th>
					<th>{{trans('messages.cart.table.price')}}</th>
					<th>{{trans('messages.cart.table.net')}}</th>
					<th>{{trans('messages.cart.table.options')}}</th>
				</tr>
			</thead>
			<tbody>
				@foreach (Cart::contents() as $item)
				<tr>
					<td>{{$item->name}}</td>
					<td>{{$item->quantity}}</td>
					<td>{{$item->price}} €</td>
					<td>{{$item->total()}} €*</td>
					<td>
						<a href="productDetails.php" class="btn btn-mini"><i class="icon-search"></i></a>
						<a href="#" class="btn btn-mini btn-danger"><i class="icon-white icon-trash"></i></a>
					</td>
				</tr>
				@endforeach
				<tr>
					<td colspan="2"></td>
					<td>{{trans('messages.cart.table.gross')}}</td>
					<td>{{Cart::total()}} €*</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="loginLabel">{{trans('messages.loginModal.title')}}</h3>
    <h3 id="rocoverLabel" style="display:none">{{trans('messages.recoverModal.title')}}</h3>
  </div>
  <div class="modal-body">
  	<!--login-->
  	<form action="{{action('UsersController@postCustomerLogin')}}" class="form-horizontal" id="loginForm" method="POST">
  		<fieldset>
				<div class="control-group">
					<label class="control-label" for="email">{{trans('messages.loginModal.email')}}</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="email" name="email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password">{{trans('messages.loginModal.pass')}}</label>
					<div class="controls">
						<input type="password" class="input-xlarge" id="password" type="password" name="password">
					</div>
				</div>
				<div class="control-group">
					<!-- <label class="control-label" for="password">Password</label> -->
					<div class="controls">
						<!-- <input type="password" class="input-xlarge" id="password"> -->
						<input type="submit" value="{{trans('messages.loginModal.logIn')}}" class="basicButton">or <a href="{{action('UsersController@getRegister')}}" class="basicButton">{{trans('messages.loginModal.createAccount')}}</a><br><br>
						<a href="#" class="recoverBtn">{{trans('messages.loginModal.forgot')}}</a>
					</div>
				</div>
  		</fieldset>
  	</form>


  	<!-- recover password -->
  	<form action="{{action('UsersController@postSendToken')}}" class="form-horizontal" style="display: none" id="recoverForm" method="POST">
  		<fieldset>
				<div class="control-group">
					<label class="control-label" for="email">{{trans('messages.recoverModal.email')}}</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="email" name="email" required>
					</div>
				</div>
				<div class="control-group">
					<!-- <label class="control-label" for="password">Password</label> -->
					<div class="controls">
						<!-- <input type="password" class="input-xlarge" id="password"> -->
						<input type="submit" value="{{trans('messages.recoverModal.btn')}}" class="basicButton"><br><br>
						<a href="#" class="loginBtn">{{trans('messages.recoverModal.remember')}}</a>
					</div>
				</div>
  		</fieldset>
  	</form>
  </div>
</div>


@yield('content')


<footer>
	<div class="wrapper clearfix">
		<div class="col25 leftCol">
			<img src="{{asset('img/footerLogo.png');}}" height="106" width="106" alt="	">
		</div>
		<div class="col50 centralCol">
			<h2>{{trans('messages.newsletter')}}</h2>
			<p>{{trans('messages.newsletterSub')}}</p>
			<form action="" class="form">
				<div class="input-append">
				  <input class="input-xlarge" id="appendedInputButton" type="text" placeholder="{{trans('messages.newsletterInput')}}">
				  <button class="btn btn-magenta" type="button"><i class="icon-envelope"></i></button>
				</div>
			</form>
		</div>
		<div class="col25 rightCol">
			<h2>{{trans('messages.quick')}}</h2>
			<ul>
				<li><a href="">Store</a></li>
				<li><a href="">News</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Collections</a></li>
				<li><a href="">Cotact us</a></li>
				<li><a href="">Terms & conditions</a></li>
				<li>{{link_to_route('site.langSwitch', 'view in english' , ['en'])}}</li>
				<li>{{link_to_route('site.langSwitch', 'view in chechornia' , ['de'])}}</li>
			</ul>
		</div>
	</div>
	<div class="wrapperBottom">

	</div>
</footer>

<script src="{{asset('js/jquery.js');}}"></script>
<script src="{{asset('js/bootstrap.min.js');}}"></script>
<script src="{{asset('js/backbone/underscore.js');}}"></script>
<script src="{{asset('js/backbone/backbone.js');}}"></script>
<script src="{{asset('js/backbone/handlebars.js');}}"></script>
<script src="{{asset('js/roomers.js');}}"></script>

</body>
</html>