@extends('template')

@section('titre')
    Modification avatar utilisateur
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Modification avatar d'utilisateur</ins></h1>

    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'adminavatars.store','novalidate' => 'novalidate',  'files' => true]) !!}

            <div class="form-group">
                {!! Form::label('avatar', 'Avatar') !!}
                {!! Form::file('avatar', null) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection