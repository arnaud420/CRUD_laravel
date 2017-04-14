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
                    <h3 class="panel-title">Utilisateur - Notes</h3>
                </div>
                <div class="panel-body text-center">
                    <a href="{{route('adminusers.index')}}" class="btn btn-primary btn-info active" role="button">Liste étudiant</a>
                    <a href="{{route('adminusers.create')}}" class="btn btn-primary btn-success active" role="button">Ajouter un étudiant</a>
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
                    <a href="{{route('admincommentaires.index')}}" class="btn btn-primary btn-info active" role="button">Liste commentaires</a>
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
                    <a href="{{route('adminavatars.index')}}" class="btn btn-primary btn-info active" role="button">Voir les avatars</a>
                </div>
            </div>
        </div>
    </div>


@endsection