@extends('master')

<?php
    if(!isset($var)) $var = null;
    if(!isset($uslov)) $var = null;
    if(!isset($lista)) $var = null;
    if(!isset($n)) $var = null;
?>
@section('body')

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

@stop