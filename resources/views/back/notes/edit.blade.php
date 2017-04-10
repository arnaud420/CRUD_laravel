@extends('template')

@section('titre')
    Edit notes
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Modification des notes de {{$user->nom}}</ins></h1>
    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => ['admin.notes.update', $user, $note->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}

            <div class="form-group">
                {!! Form::label('note', 'Entrez la nouvelle note : ') !!}
                {!! Form::number('note', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection