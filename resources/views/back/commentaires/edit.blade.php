@extends('template')

@section('titre')
    Modification des commentaires de tout les étudiants
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Modification des commentaires</ins></h1>

    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => ['admincommentaires.update', $commentaire->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}

            <div class="form-group">
                {!! Form::label('contenu', 'Entrez le nouveau commentaire : ') !!}
                {!! Form::text('contenu', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection