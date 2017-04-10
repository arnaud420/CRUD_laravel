@extends('template')

@section('titre')
    Vue notes étudiants index
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Ajout / modification / suppression notes</ins></h1>
    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->nom }}, {{ $user->prenom }}</h2>
    <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{ $user->email }}</p>
    <p>
        <a href="notes/create" class="btn btn-primary btn-success active" role="button">Ajouter une note</a>
    </p>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Ses Notes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notes as $note)
                    <tr>
                        <th>{{ $note->note }}</th>
                        <th><a href="notes/{{$note->id}}/edit" class="btn btn-primary btn-warning active" role="button">Modifier</a></th>
                        <th>
                            Supprimer
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection