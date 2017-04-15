@extends('template')

@section('titre')
    Ajout de commentaire
@endsection

@section('contenu')

    @if (\Illuminate\Support\Facades\Auth::check())
    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => ['users.commentaires.store', $user]]) !!}
            <fieldset>
                <legend>Laisse un commentaire à {{ $user->prenom }}</legend>
            </fieldset>

            <div class="form-group">
                {!! Form::label('contenu', 'Entre ton commentaire : ') !!}
                {!! Form::text('contenu', null, ['class' => 'form-control']) !!}
                {!! $errors->first('contenu', '<small class="help-block">:message</small>') !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    @else
        <h2 class="text-center text-danger">Attention : Il faut être connecté pour laisser un commentaire !</h2>
            <h3 class="text-center"><a href="{{route('login.index')}}">Clique pour te connecter</a></h3>
    @endif
@endsection