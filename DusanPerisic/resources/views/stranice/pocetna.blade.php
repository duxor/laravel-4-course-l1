@extends('master')

@section('content')
    <div class="col-sm-6">
        <h1>{{$korisnik->prezime}} {{$korisnik->ime}}</h1>

        <h2>Identifikacija korisnika</h2>
        {!! Form::open(['url' => '/identifikacija/update']) !!}
            {!! Form::hidden('id', $korisnik->id) !!}
            {!! Form::label('lprezime', 'Prezime') !!}
            {!! Form::text('prezime', $korisnik->prezime, ['class' => 'form-control']) !!}
            {!! Form::label('lime', 'Ime') !!}
            {!! Form::text('ime', $korisnik->ime, ['class' => 'form-control']) !!}
            {!! Form::label('ljmbg', 'JMBG') !!}
            {!! Form::text('jmbg', $korisnik->jmbg, ['class' => 'form-control']) !!}
            <p style="margin-top: 5px">
                {!! Form::submit('Potvrdi', ['class' => 'btn btn-lg btn-success']) !!}
                {!! Form::reset('Resetuj', ['class' => 'btn btn-lg btn-danger']) !!}
                </p>
        {!! Form::close() !!}
    </div>
    @endsection