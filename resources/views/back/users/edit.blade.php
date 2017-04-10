@extends('template')

@section('titre')
    Modification utilisateur
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Modification d'utilisateur</ins></h1>

    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => ['adminusers.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}

            <div class="form-group">
                {!! Form::label('nom', 'Entrez le nouveau nom : ') !!}
                {!! Form::text('nom', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('prenom', 'Entrez le nouveau prenom : ') !!}
                {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Entrez le nouveau email : ') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Entrez le nouveau mot de passe : ') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection