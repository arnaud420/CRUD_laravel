@extends('template')

@section('titre')
    Espace étudiant
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Espace étudiants</ins></h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-striped">
                    <caption>Liste des élèves</caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->nom }}</th>
                                <th>{{ $user->prenom }}</th>
                                <th><a href="users/{{ $user->id }}">voir détail</a></th>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
@endsection