<?php

namespace App\Http\Controllers;
use AdamWathan\Form\Elements\Input;
use App\Commentaire;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

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
        if (Auth::check())
        {
            $input['auteur'] = Auth::user()->prenom;
            $user->commentaires()->create($input);
        }
        return redirect(route('users.show', compact('user')));
    }

}
