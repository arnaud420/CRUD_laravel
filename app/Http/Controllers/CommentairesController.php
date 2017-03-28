<?php

namespace App\Http\Controllers;
use App\Commentaire;
use Illuminate\Http\Request;

class CommentairesController extends Controller
{
    public function create()
    {
        return view('front.user.commentaire');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Commentaire::create($input);
        return redirect(route('users.show'));
    }

    /*public function show ($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        return view('front.user.show', compact('commentaire'));
    }*/
}
