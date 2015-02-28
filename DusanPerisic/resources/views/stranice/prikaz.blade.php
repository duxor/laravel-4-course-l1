@extends('master')

@if(!isset($var)) {{$var=null}} @endif
@if(!isset($uslov)) {{$uslov=null}} @endif
@if(!isset($lista)) {{$lista=null}} @endif
@if(!isset($n)) {{$n=null}} @endif

@section('content')
    {!! $var !!}

    @if($uslov)
        @foreach($lista as $key => $value)
            {!! $key !!} = {!! $value !!}<br>
        @endforeach

        {!! HTML::ul($lista) !!}

        @for($i=0; $i<$n; $i++)
            brojac: {!!$i!!}<br>
        @endfor
    @endif

@endsection