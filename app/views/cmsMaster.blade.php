<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=1024, maximum-scale=2" />
	<meta name="description" content="Description" />
	<meta name="keywords" content="Keywords" />
	<meta name="author" content="imaginamos.com">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 month">
	<title></title>

<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
<!-- <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet"> -->

	<!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
	<link rel="stylesheet" type="text/css" href="css/normalize.css"> -->
<link href="{{asset('vendor/select2/select2.css');}}" rel="stylesheet">
<link href="{{asset('vendor/switch/bootstrap-switch.css');}}" rel="stylesheet">

</head>
<body>

<div class="container" style="margin-top:30px;">
	<div class="row">
		<div class="span3">
			<div class="well">
				<ul class="nav nav-list">
				  <li class="nav-header">Admin Products</li>
					<li><a href="{{URL::to('cms/products')}}">Products</a></li>
					<li><a href="{{URL::to('cms/collections')}}">Collections</a></li>
					<li><a href="{{URL::to('cms/categories')}}">Categories</a></li>
					<li><a href="{{URL::to('cms/taxes')}}">Taxes</a></li>
				  <li class="nav-header">Customers and orders</li>
					<li><a href="{{URL::to('cms/customers')}}">Customers</a></li>
				  <li class="nav-header">Configurations</li>
					<li><a href="{{URL::to('cms/taxes')}}">Taxes</a></li>
					<ul>
						<li><a href="">Jmmm</a></li>
					</ul>
				</ul>
			</div>
		</div>
		<div class="span9">@yield('content')</div>
	</div>
</div>


<script src="http://codeorigin.jquery.com/jquery-git2.min.js"></script>
 <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="{{asset('vendor/select2/select2.min.js');}}"></script>
<script src="{{asset('vendor/switch/bootstrap-switch.min.js');}}"></script>
<script src="{{asset('js/cmsRoomers.js');}}"></script>
</body>
</html>