@extends('template')

@section('titre')
    Profil étudiant
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Profil de l'étudiant :</ins></h1>
    <div class="row">
        <div class="col-md-12">
            <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->nom }}, {{ $user->prenom }}</h2>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{ $user->email }}</p>
                    <p><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Ses notes =>
                        @foreach($notes as $note)
                            <span><strong><mark>{{ $note->note }}/20</mark></strong></span>
                        @endforeach
                    </p>
        </div>
    </div>

    <h2>Commentaires :</h2>

    <div class="row">
        @foreach($commentaires as $commentaire)
        <div class="col-md-1">
            <div class="thumbnail">
                <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div>
        </div>

        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>{{ $commentaire->auteur }}</strong> <span class="text-muted">posté le {{ $commentaire->created_at }}</span>
                </div>
                <div class="panel-body">
                    {{ $commentaire->contenu }}
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
        <a href="{{ route('users.commentaires.create', compact('user')) }}" class="btn btn-primary btn-lg active" role="button">Ajoute un commentaire à {{ $user->prenom }}</a>
    </div>



@endsection