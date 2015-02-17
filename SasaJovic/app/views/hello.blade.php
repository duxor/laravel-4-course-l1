<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ HTML:: script('js/script.js')}}
	{{HTML:: style('css/style.css')}}


</head>
<body>

<!--{{HTML::link('http://google.rs','Google')}}
{{HTML:: ul($list)}}-->
<form action="verify" method="POST">
	<label>Username 
		<input name="username" type="text">
	</label>
	<br>
	<label>Password 
		<input name="password" type="password">
	</label>
	<br>
	<input type="submit">
	
</form>




</body>
</html>
