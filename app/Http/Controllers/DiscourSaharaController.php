<?php

namespace App\Http\Controllers;

use App\Models\Discour_sahara;
use Illuminate\Http\Request;

class DiscourSaharaController extends Controller
{
    public function index(){
        return view('sahara.index',['discours'=>Discour_sahara::orderBy('Date')->cursor()]); 
    }

    public function create()
    {
        return view("sahara.Ajouter");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'Occasion' => 'required',
            'type_d' => 'required',
            'Date'  => 'required',
            'Extrait_en_fran_ais'  => 'required',
            'Extrait_ar'  => 'required',
            'Extrait_en_anglais'  => 'required',
            'URL_FR'  => 'required',
            'URL_Ar'  => 'required',
            'URL_Eng'  => 'required',
        ]);

        $discour               = new Discour_sahara();
        $discour->Occasion     = $request->Occasion;
        $discour->type_d       = $request->type_d;
        $discour->Date         =$request->Date;
        $discour->Extrait_en_fran_ais      =$request->Extrait_en_fran_ais;
        $discour->Extrait_ar                =$request->Extrait_ar;
        $discour->Extrait_en_anglais        =$request->Extrait_en_anglais;
        $discour->URL_FR                    =$request->URL_FR;
        $discour->URL_Ar                    =$request->URL_Ar;
        $discour->URL_Eng                   =$request->URL_Eng;
        $discour->save();

        return back()->with('success', 'Ajout effectué avec succés!');
    }

    public function destroy($id)
    {
        $discour = Discour_sahara::find($id);
        $discour->delete();
        return back()->with('success', 'Suppression effectuée avec succés!');

    }
    public function edit($id)
    {
        $discour = Discour_sahara::find($id);
        return view('sahara.edit', ['discour' => $discour]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Occasion' => 'required',
            'type_d' => 'required',
            'Date'  => 'required',
            'Extrait_en_fran_ais'  => 'required',
            'Extrait_ar'  => 'required',
            'Extrait_en_anglais'  => 'required',
            'URL_FR'  => 'required',
            'URL_Ar'  => 'required',
            'URL_Eng'  => 'required',
        ]);

        $discour = Discour_sahara::find($id);
        
        $discour->Occasion     = $request->Occasion;
        $discour->type_d       = $request->type_d;
        $discour->Date         =$request->Date;
        $discour->Extrait_en_fran_ais      =$request->Extrait_en_fran_ais;
        $discour->Extrait_ar                =$request->Extrait_ar;
        $discour->Extrait_en_anglais        =$request->Extrait_en_anglais;
        $discour->URL_FR                    =$request->URL_FR;
        $discour->URL_Ar                    =$request->URL_Ar;
        $discour->URL_Eng                   =$request->URL_Eng;
        $discour->save();

        return back()->with('success', 'Modification effectuée avec succés!!');
    }
}
