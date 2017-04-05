@extends('template')

@section('titre')
    Iscription utilisateur
@endsection

@section('contenu')
    {!! Form::open(['route' => 'users.store']) !!}

        {!! Form::label('nom', 'Entrez votre nom : ') !!}
        {!! Form::text('nom') !!}

        {!! Form::label('prenom', 'Entrez votre prenom : ') !!}
        {!! Form::text('prenom') !!}

        {!! Form::label('email', 'Entrez votre email : ') !!}
        {!! Form::email('email') !!}

        {!! Form::label('password', 'Entrez votre mot de passe : ') !!}
        {!! Form::password('password') !!}
        {!! Form::submit('Envoyer') !!}

    {!! Form::close() !!}
@endsection
