@extends('front.template')

@section('titre')
    Ajout de commentaire
@endsection

@section('contenu')

    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => ['users.commentaires.store', $user]]) !!}
            <fieldset>
                <legend>Ajoute un commentaire</legend>
            </fieldset>

            <div class="form-group">
                {!! Form::label('auteur', 'Entrez votre nom : ')  !!}
                {!! Form::text('auteur') !!}
            </div>

            <div class="form-group">
                {!! Form::label('contenu', 'Entrez votre commentaire : ') !!}
                {!! Form::text('contenu') !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Envoyer') !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection