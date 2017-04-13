@extends('template')

@section('titre')
    Creation utilisateur
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Creation d'utilisateur</ins></h1>

    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'adminusers.store','novalidate' => 'novalidate',  'files' => true]) !!}

            <div class="form-group">
            {!! Form::label('nom', 'Entrez le nom de l étudiant : ') !!}
            {!! Form::text('nom', null, ['class' => 'form-control']) !!}
            </div>
                <div class="form-group">
            {!! Form::label('prenom', 'Entrez le prenom de l étudiant : ') !!}
            {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
                </div>
                    <div class="form-group">
            {!! Form::label('email', 'Entrez l email de l étudiant : ') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                        <div class="form-group">
            {!! Form::label('password', 'Entrez le mot de passe de l étudiant : ') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
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
