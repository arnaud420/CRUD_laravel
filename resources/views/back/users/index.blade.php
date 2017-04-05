@extends('template')

@section('titre')
    Voir les étudiants
@endsection

@section('contenu')
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
                        <th>{!! $user->id !!}</th>
                        <th>{!! $user->nom !!}</th>
                        <th>{!! $user->prenom !!}</th>
                        <th><a href="" class="btn btn-primary btn-warning active" role="button">Modifier</a>
                            <a href="#" class="btn btn-primary btn-danger active" role="button">Supprimer</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection