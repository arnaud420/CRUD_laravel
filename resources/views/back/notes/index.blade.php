@extends('template')

@section('titre')
    Vue notes étudiants index
@endsection

@section('contenu')
    <div class="row">
        <h1 class="text-center"><ins>Ajout / modification / suppression notes</ins></h1>
        <img src="/uploads/avatars/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left; margin-right: 15px;">
        <h2> {{ $user->nom }}, {{ $user->prenom }}</h2>
        <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{ $user->email }}</p>
        <p>
            <a href="notes/create" class="btn btn-primary btn-success active" role="button">Ajouter une note</a>
        </p>
    </div>

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
                            {!! Form::open(['method' => 'DELETE', 'route' => ['adminusers.notes.destroy', $user->id, $note]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-primary btn-danger', 'onclick' => 'return confirm(\'Voulez-vous vraiment supprimer cette note ?\')']) !!}
                            {!! Form::close() !!}
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection