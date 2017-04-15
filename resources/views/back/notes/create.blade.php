@extends('template')

@section('titre')
    Creation de note utilisateur
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Creation de note utilisateur</ins></h1>

    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => ['adminusers.notes.store', $user]]) !!}
            <div class="form-group">
                {!! Form::label('note', 'Entrez la note de l étudiant : ') !!}
                {!! Form::text('note', null, ['class' => 'form-control']) !!}
                {!! $errors->first('note', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
