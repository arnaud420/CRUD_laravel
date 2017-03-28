<?php

namespace App\Http\Controllers;
use App\Commentaire;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('front.user.index', compact('users'));
    }
    public function create()
    {
        return view('front.user.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect(route("users.index"))->with("success", "l'utilisateur a ete cree");
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        $commentaires = $user->commentaires()->get(); //récupére la fonction commentaires correspondant à l'id de l'user situé dans le model User
        $notes = $user->notes()->get();
        return view('front.user.show', compact('user', 'commentaires', 'notes')); //return view('front.user.show', compact('user'))->with('commentaires', $commentaires);
    }
}