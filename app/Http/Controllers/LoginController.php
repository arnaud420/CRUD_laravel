<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("front.login.index");
    }

    public function connexion(Request $request)
    {
        $input = $request->all();
        Auth::attempt(array(
            'email' => $input['email'],
            'password' => $input['password']));

        if(Auth::check())   //Vérifie si l'user est connecté
        {
            return redirect(route('login.index'))->With("info", "Vous êtes bien connecté");
        }
        else //si l'user n'est pas conecté
        {
            return redirect(route('login.index'))->With("info", "Vous êtes PAS bien connecté");
        }
    }
    public function deconnexion()
    {
        Auth::logout();
        return redirect(route('home'))->with("info", "Vous êtes bien deconnecté");
    }
}