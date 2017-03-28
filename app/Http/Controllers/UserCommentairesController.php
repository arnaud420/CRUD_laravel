<?php

namespace App\Http\Controllers;
use App\Commentaire;
use App\User;
use Illuminate\Http\Request;

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
        $commentaire = $user->commentaires()->create($input);
        return redirect(route('users.show', compact('user')));
    }

}
