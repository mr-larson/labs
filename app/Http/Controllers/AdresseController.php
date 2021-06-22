<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use Illuminate\Http\Request;

class AdresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adresse = Adresse::first();
        return view("backoffice.adresse.all", compact("adresse"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function show(Adresse $adresse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function edit(Adresse $adresse)
    {
        $this->authorize("adresse-edit", $adresse);
        return view("backoffice.adresse.edit", compact("adresse"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adresse $adresse)
    {
        $this->authorize("update", $adresse);
        $request->validate([
            "rue"=>'required',
            "num"=>'required',
            "ville"=>'required',
            "code"=>'required',
            "phone"=>'required',
            "email"=>'required',
        ]);

        $adresse->rue = $request->rue;
        $adresse->num = $request->num;
        $adresse->ville = $request->ville;
        $adresse->code = $request->code;
        $adresse->phone = $request->phone;
        $adresse->email = $request->email;
        
        $adresse->updated_at = now();
        $adresse->save();

        return redirect()->route("adresse.index")->with("successMessage", "Votre adresse à bien été ajouté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adresse $adresse)
    {
        //
    }
}
