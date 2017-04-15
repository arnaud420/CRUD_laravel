<?php

namespace App\Http\Controllers\admin;

use Barryvdh\Debugbar\Middleware\Debugbar;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;
use Intervention\Image\Facades\Image;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all(); retourne toutes les entrées
        $users = User::select('nom', 'prenom', 'id')->get(); //requête select
        return view('back.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        if ($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            $newUser = new User(array(
                "nom" => $request->input("nom"),
                "password" => $request->input("password"),
                "email" => $request->input("email"),
                "prenom" => $request->input("prenom")
            ));
            $newUser->avatar = $filename;
            $newUser->save();
        }

        else
        {
            $input = $request->all();
            User::create($input);
        }

        return redirect(route("adminusers.index"))->withOk("success", "l'utilisateur a ete cree");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('back.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = User::findOrFail($id); // je recupere l user
        $user_update= $user->update($input); //je le met a jour
        if ($user_update)
        {
            return redirect(route('adminusers.index'))->with('Utilisateur mis à jour');
        }
        else
        {
            return redirect()->back()->with('Erreur lors de la mise a jour')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count= User::destroy($id); //renverra combien ça en a supprimé
        if($count==1)
        {
            return redirect(route("adminusers.index"))->with("success", "l'user a bien ete supprime");
        }
        else
        {
            return redirect()->back()->with("danger", "l'user n a pas ete supprime");
        }
    }
}
