@extends('template')

@section('titre')
    Liste les commentaires de tout les étudiants
@endsection

@section('contenu')
    <h1>Liste de tout les commentaires des étudiants</h1>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Auteur</th>
                    <th>Commentaire</th>
                </tr>
                </thead>
                <tbody>
                @foreach($commentaires as $commentaire)
                    <tr>
                        <th>{!! $commentaire->id !!}</th>
                        <th>{!! $commentaire->auteur !!}</th>
                        <th>{!! $commentaire->contenu !!}</th>
                        <th><a href="" class="btn btn-primary btn-warning active" role="button">Modifier</a></th>
                        <th>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection