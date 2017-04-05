@extends('template')

@section('titre')
    Espace Admin
@endsection

@section('contenu')
    <h1 class="text-center"><ins>Espace admin</ins></h1>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Actions à effectuer</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Utilisateur</h3>
                </div>
                <div class="panel-body text-center">
                    <a href="{{route('admin.users.index')}}" class="btn btn-primary btn-info active" role="button">Voir</a>
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary btn-success active" role="button">Ajouter</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Note utilisateur</h3>
                </div>
                <div class="panel-body text-center">
                    <a href="#" class="btn btn-primary btn-info active" role="button">Voir</a>
                    <a href="#" class="btn btn-primary btn-success active" role="button">Ajouter</a>
                    <a href="#" class="btn btn-primary btn-warning active" role="button">Modifier</a>
                    <a href="#" class="btn btn-primary btn-danger active" role="button">Supprimer</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Commentaires</h3>
                </div>
                <div class="panel-body text-center">
                    <a href="{{route('admin.commentaires.index')}}" class="btn btn-primary btn-info active" role="button">Voir</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Avatar utilisateur</h3>
                </div>
                <div class="panel-body text-center">
                    <a href="#" class="btn btn-primary btn-info active" role="button">Voir</a>
                    <a href="#" class="btn btn-primary btn-success active" role="button">Ajouter</a>
                    <a href="#" class="btn btn-primary btn-warning active" role="button">Modifier</a>
                    <a href="#" class="btn btn-primary btn-danger active" role="button">Supprimer</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tag commentaire</h3>
                </div>
                <div class="panel-body text-center">
                    <a href="#" class="btn btn-primary btn-success active" role="button">Ajouter</a>
                </div>
            </div>
        </div>
    </div>


@endsection