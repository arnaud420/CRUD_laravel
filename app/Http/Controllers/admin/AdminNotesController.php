<?php

namespace App\Http\Controllers\admin;

use App\Note;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminNotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::findOrFail($id);
        $notes = $user->notes()->get();
        return view('back.notes.index', compact('user', 'notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('back.notes.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id)
    {
        $input = $request->all();
        $user = User::findOrFail($user_id);
        $user->notes()->create($input);
        return redirect(route("adminusers.notes.index", compact('user')))->withOk("success", "la note a ete cree");
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
    public function edit($user_id, $note_id)
    {
        $user = User::findOrFail($user_id);
        $user->notes()->get();
        $note = $user->notes()->findOrFail($note_id);
        return view('back.notes.edit', compact('user', 'note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id, $note_id)
    {
        $input = $request->all();
        $user = User::findOrFail($user_id);
        $note = $user->notes()->findOrFail($note_id);

        $note_update= $note->update($input);
        if ($note_update)
        {
            return redirect(route('adminusers.notes.index', compact('user', 'note')))->with('Note mis à jour');
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
    public function destroy($user_id, $note_id)
    {
        $user = User::findOrFail($user_id);
        $count= Note::destroy($note_id);
        if($count==1)
        {
            return redirect(route("adminusers.notes.index", compact('user', 'note')))->with("success", "l'user a bien ete supprime"); //je ne redirige pas vers back puisque la page (l user) n'exsite plus
        }
        else
        {
            return redirect()->back()->with("danger", "l'user n a pas ete supprime");
        }
    }
}
