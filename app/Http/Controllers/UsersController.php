<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::select('nom', 'prenom', 'id')->get();
        return view('front.user.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id); //verifie si il y a un user
        if ($user)
        {
            $commentaires = $user->commentaires()->select('contenu', 'auteur', 'created_at')->orderBy('id', 'DESC')->get(); //récupére la fonction commentaires correspondant à l'id de l'user situé dans le model User
            $notes = $user->notes()->select('note')->get();
            return view('front.user.show', compact('user', 'commentaires', 'notes'));
        }
        else
        {
            return view('errors.404');
        }
    }
}