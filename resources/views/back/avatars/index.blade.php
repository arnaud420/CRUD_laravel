@extends('template')

@section('titre')
    Voir les avatars des étudiants
@endsection

@section('contenu')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped">
                <caption>Liste des élèves</caption>
                <thead>
                <tr>
                    <th>#</th>
                    <th>AVATAR</th>
                    <th>NOM</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th><img src='/uploads/avatars/{{ $user->avatar }}' style="height: 50px; width: 50px;"></th>
                        <th>{{ $user->nom }}</th>
                        <th><a href="{{route('adminavatars.edit', $user )}}" class="btn btn-primary btn-warning active" role="button">Modifier avatar</a></th>
                        <th>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['adminavatars.destroy', $user->id]]) !!}
                                {!! Form::submit('Supprimer avatar', ['class' => 'btn btn-primary btn-danger', 'onclick' => 'return confirm(\'Voulez-vous vraiment supprimer cette note ?\')']) !!}
                            {!! Form::close() !!}
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection