<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Commentaire;

class AdminCommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaires = Commentaire::all();
        return view('back.commentaires.index', compact('commentaires'));
    }


    public function edit($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        return view('back.commentaires.edit', compact('commentaire'));
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
        $commentaire = Commentaire::findOrFail($id);
        $commentaire_update = $commentaire->update($input);
        if ($commentaire_update)
        {
            return redirect(route('admincommentaires.index'))->with('Utilisateur mis à jour');
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
        $count= Commentaire::destroy($id); //renverra combien ça en a supprimé
        if($count==1)
        {
            return redirect(route("admincommentaires.index"))->with("success", "l'user a bien ete supprime"); //je ne redirige pas vers back puisque la page (l user) n'exsite plus
        }
        else
        {
            return redirect()->back()->with("danger", "l'user n a pas ete supprime");
        }
    }
}
