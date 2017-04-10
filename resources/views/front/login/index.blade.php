@extends('template')

@section('titre')
    Page de connexion
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Login</ins></h1>
    @if (Auth::check())
        <h2 class="text-center">Bonjour et bienvenu {{Auth::user()->nom}}, {{Auth::user()->prenom}}</h2>
    @else
    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'login.connexion']) !!}
            <fieldset>
                <legend>Connexion</legend>
            </fieldset>

            <div class="form-group">
                {!! Form::label('email', 'Entre ton email : ')  !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Entre ton mot de passe : ') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    @endif
@endsection