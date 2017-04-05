<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre')</title>

    <!-- Latest compiled and minified CSS bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Projet PHP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('users.index')}}">Espace etudiant</a></li>
                <li><a href="{{route('admin')}}">Espace admin</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('login.index')}}"><span class="glyphicon glyphicon-user"></span> Connexion</a></li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li><a href="{{route('login.deconnexion')}}"><span class="glyphicon glyphicon-log-in"></span> Deconnexion</a></li>
                        @endif
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    @yield('contenu')
</div>

<!-- Latest compiled and minified JavaScript bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>