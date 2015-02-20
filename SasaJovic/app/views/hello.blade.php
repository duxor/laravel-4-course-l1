<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
		margin-top: 50px;
		text-align: center;
		background-color: rgb(15,25,90);
		color:white;
	}

	div{
		margin: 30px 0;
	}
	form{
		display:inline;
	}
</style>
	<title></title>
</head>
<body>
	{{ Form::open(array('url'=>'add')) }}
		{{ Form::label('name', 'Project name') }}
		{{ Form::text('name') }}
		{{ Form::submit('Add!') }}
	{{ Form::close() }}

	@foreach($projects as $project)
		<div>
			{{$project->name}}({{$project->money}} $)
			{{Form::open(array('url' =>'donate'))}}
			 	{{Form::hidden('id', $project->id)}}
				{{Form::selectRange('donation', 1,15)}}
				{{Form::submit('Donate!')}}
			{{Form:: close() }}
		</div>

	@endforeach
</body>
</html>