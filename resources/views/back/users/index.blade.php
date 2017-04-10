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
                    <th>NOTES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{!! $user->id !!}</th>
                        <th>{!! $user->nom !!}</th>
                        <th>{!! $user->prenom !!}</th>
                        <th><a href="users/{{ $user->id }}/notes" class="btn btn-primary btn-info active" role="button">Voir notes</a></th>
                        <th><a href="users/{{ $user->id }}/edit" class="btn btn-primary btn-warning active" role="button">Modifier</a></th>
                        <th>{!! Form::open(['method' => 'DELETE', 'route' => ['adminusers.destroy', $user->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-primary btn-danger', 'onclick' => 'return confirm(\'Voulez-vous vraiment supprimer cet utilisateur ?\')']) !!}
                            {!! Form::close() !!}
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection