<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asso;
use App\User;

class AssoController extends Controller
{
    public function create()
    {
        return view('assos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Asso $asso)
    {
        $res = Validator::make($request->all(), [
            'titre' => 'required|max:255',
            'description' => 'required',
        ])->validate();

        Auth::user()->assos()->create($res);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asso  $Asso
     * @return \Illuminate\Http\Response
     */
    public function show(Asso $asso)  
    {
        $name_orga = User::where('id', $asso->user_id)->get()->first();
        return view('assos.show', [
            'name_orga' => $name_orga,
            'asso' => $asso
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asso  $asso
     * @return \Illuminate\Http\Response
     */
    public function edit(Asso $asso)
    {
        return view('assos.edit', [
            'asso' => $asso
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asso  $asso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asso $asso)
    {
        Validator::make($request->all(), [
            'titre' => 'required|max:255',
            'description' => 'required',
        ])->validate();

        $asso->titre = $request->titre;
        $asso->description = $request->description;
        $asso->lieu = $request->lieu;
        $asso->url_image = $request->url_image;
        $asso->save();

        return redirect()->route('home')->with('success', 'Asso Modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asso  $asso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asso::where('id', $id)->delete();

        return redirect()->route('home');
    }
}
