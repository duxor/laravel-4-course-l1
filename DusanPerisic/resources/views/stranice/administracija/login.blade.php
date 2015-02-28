{!! Form::open(['url'=>'/administracija/login']) !!}
    {!! Form::text('username', 'admin') !!}
    {!! Form::password('password', ['value'=>'admin']) !!}
    {!! Form::submit('Prijava') !!}
{!! Form::close() !!}