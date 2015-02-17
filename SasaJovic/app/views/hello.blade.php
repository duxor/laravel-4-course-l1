<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">


</head>
<body>

{{ Form::open(array('url' => '/', 'method' => 'POST')) }}
	{{ Form:: text('username', 'username here...') }}
	{{ Form:: select('flavor',$flavors)}}
	{{ Form:: submit('Submit Me!')}}
{{ Form::close() }}

</body>
</html>
