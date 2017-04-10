<?php

namespace App\Http\Controllers;
use AdamWathan\Form\Elements\Input;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCommentairesController extends Controller
{

    public function create($userId)
    {
        $user = User::findOrFail($userId);
        return view('front.user.commentaire', compact("user"));

    }

    public function store(Request $request, $userId)
    {
        $input = $request->all();
        $user = User::findOrFail($userId);
        $user->commentaires()->create($input);

        /*$user = User::findOrFail($userId);
        $contenu = $request->input('contenu');
        $auteur = Auth::user()->prenom;
        $user->commentaires()->create($contenu, $auteur);*/


        return redirect(route('users.show', compact('user')));
    }

}
