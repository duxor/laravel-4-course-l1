 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<nav>
	
	<!--@yield('navigation-bar') -->
	@section('navigation-bar')
	<a href="/">Home</a>
	@show
</nav>
<img src="http://www.reestyle.net/vendor/reestyle/assets/php-logo.png">
<section>
	@yield('content')
</section>

</body>
</html>