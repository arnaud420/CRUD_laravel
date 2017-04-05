@extends('template')

@section('titre')
    Creation utilisateur
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Creation d'utilisateur</ins></h1>

    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'admin.users.store']) !!}

            <div class="form-group">
            {!! Form::label('nom', 'Entrez votre nom : ') !!}
            {!! Form::text('nom', null, ['class' => 'form-control']) !!}
            </div>
                <div class="form-group">
            {!! Form::label('prenom', 'Entrez votre prenom : ') !!}
            {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
                </div>
                    <div class="form-group">
            {!! Form::label('email', 'Entrez votre email : ') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                        <div class="form-group">
            {!! Form::label('password', 'Entrez votre mot de passe : ') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
                            <div class="form-group">
            {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
