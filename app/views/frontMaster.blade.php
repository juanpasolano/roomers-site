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
	<div class="logo"><img src="img/headerLogo.png" height="128" width="129" alt=""></div>
	<nav class="header">
		<ul>
			<li class=""><a href="index.php">Home</a></li>
			<li class=""><a href="shop.php">Shop</a></li>
			<!-- <li><a href="">Premium products</a></li> -->
			<li><a href="">About us</a></li>
			<li><a href="">Services</a></li>
			<li><a href="">Contact us</a></li>
		</ul>
	</nav>
	<nav class="header header-fixed">
		<ul>
			<li class=""><a href="index.php">Home</a></li>
			<li class=""><a href="shop.php">Shop</a></li>
			<!-- <li><a href="">Premium products</a></li> -->
			<li><a href="">About us</a></li>
			<li><a href="">Services</a></li>
			<li><a href="">Contact us</a></li>
		</ul>
	</nav>
</header>

<div class="accountWidget">
	<div class="shown">
		Hi, Lopex Rodrigues Kanz<br>
		<a href="profile.php">Profile</a><br>
		<a href="#">Sign out</a><br>

		<!-- You are not logged in<br> -->
		<a href="#loginModal" role="button" data-toggle="modal">Log in now</a><br>
		<a href="newAccount.php">Create an account</a>
		<a href="#" class="cartBtn">{{Cart::totalItems();}} items</a><br>
	</div>
	<div class="hidden">
		<a href="orderMake.php" class="btn btn-fucsia pull-right">Continue the purchase</a>
		<div class="separator"></div>
		<table class="table">
			<thead>
				<tr>
					<th>Article</th>
					<th>No</th>
					<th>Price</th>
					<th>Net</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				@foreach (Cart::contents() as $item)
				<tr>
					<td>{{$item->name}}</td>
					<td>1</td>
					<td>47.5 €	</td>
					<td>47.5 €</td>
					<td>
						<a href="productDetails.php" class="btn btn-mini"><i class="icon-search"></i></a>
						<a href="#" class="btn btn-mini btn-danger"><i class="icon-white icon-trash"></i></a>
					</td>
				</tr>
				@endforeach
				<tr>
					<td colspan="2"></td>
					<td>Gross total	</td>
					<td>126.78 €</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Login with your account</h3>
  </div>
  <div class="modal-body">
  	<form action="profile.php" class="form-horizontal">
  		<fieldset>
				<div class="control-group">
					<label class="control-label" for="email">Email</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password">Password</label>
					<div class="controls">
						<input type="password" class="input-xlarge" id="password">
					</div>
				</div>
				<div class="control-group">
					<!-- <label class="control-label" for="password">Password</label> -->
					<div class="controls">
						<!-- <input type="password" class="input-xlarge" id="password"> -->
						<input type="submit" value="Log in" class="basicButton">or <a href="#" class="basicButton">Create an account</a><br><br>
						<a href="#">Forgot your password?</a>
					</div>
				</div>
  		</fieldset>
  	</form>
  </div>
  <!-- <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div> -->
</div>


@yield('content');


<footer>
	<div class="wrapper clearfix">
		<div class="col25 leftCol">
			<img src="img/footerLogo.png" height="106" width="106" alt="	">
		</div>
		<div class="col50 centralCol">
			<h2>Newsletter</h2>
			<p>Subscribe to our newsletter to recieve the latest news and discounts</p>
			<form action="" class="form">
				<div class="input-append">
				  <input class="input-xlarge" id="appendedInputButton" type="text" placeholder="Write your email here...">
				  <button class="btn btn-magenta" type="button"><i class="icon-envelope"></i></button>
				</div>
			</form>
		</div>
		<div class="col25 rightCol">
			<h2>Quick access</h2>
			<ul>
				<li><a href="">Store</a></li>
				<li><a href="">News</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Collections</a></li>
				<li><a href="">Cotact us</a></li>
				<li><a href="">Terms & conditions</a></li>
			</ul>
		</div>
	</div>
	<div class="wrapperBottom">

	</div>
</footer>

<script src="{{asset('js/jquery.js');}}"></script>
<script src="{{asset('js/backbone/underscore.js');}}"></script>a
<script src="{{asset('js/backbone/backbone.js');}}"></script>
<script src="{{asset('js/backbone/handlebars.js');}}"></script>
<script src="{{asset('js/roomers.js');}}"></script>

</body>
</html>