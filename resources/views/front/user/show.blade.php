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
                    <p><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Ses notes :</p>
                        @foreach($notes as $note)
                            <span>{{ $note->note }}/</span>
                        @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2>Commentaires :</h2>
                <p>Liste de comentaires ...</p>

            <div class="row">
                <div class="col-md-12">
                    @foreach($commentaires as $commentaire)
                        <em>Posté le {{ $commentaire->created_at }} par {{ $commentaire->auteur }}</em>
                        <p>{{ $commentaire->contenu }}</p>
                    @endforeach
                </div>
            </div>

            <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                <a href="{{ route('users.commentaires.create', compact('user')) }}" class="btn btn-default" role="button">Ajoute un commentaire à {{ $user->prenom }}</a>
            </div>
        </div>
    </div>

@endsection