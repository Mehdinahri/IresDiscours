<?php

namespace App\Http\Controllers;

use App\Models\Discour;
use App\Models\Liste_url_resolution;
use App\Models\Discour_sahara;

use Illuminate\Http\Request;

class DiscourController extends Controller
{
    public function index2(){
        $discour= Discour::count();
        $url = Discour_sahara::count();
        $sahara= Liste_url_resolution::count();

        return view('dashboard',['discour'=>$discour,'url'=>$url,'sahara'=>$sahara,]); 
    }

    public function index(){
        return view('discour.index',['discours'=>Discour::orderBy('Date_disc')->cursor()]); 
    }

    public function create()
    {
        return view("discour.Ajouter");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'Occasion' => 'required',
            'Type' => 'required',
            'Date_disc'  => 'required',
            'Text_fr'  => 'required',
            'Text_ar'  => 'required',
            'Pj_fr'  => 'required',
            'Pj_ar'  => 'required',
        ]);

        $discour               = new Discour();
        $discour->Occasion     = $request->Occasion;
        $discour->Type         = $request->Type;
        $discour->Date_disc    =$request->Date_disc;
        $discour->Text_fr      =$request->Text_fr;
        $discour->Text_ar      =$request->Text_ar;
        $discour->Pj_fr        =$request->Pj_fr;
        $discour->Pj_ar        =$request->Pj_ar;
        $discour->save();

        return back()->with('success', 'Ajout effectué avec succés!');
    }

    public function destroy($id)
    {
        $discour = Discour::find($id);
        $discour->delete();
        return back()->with('success', 'Suppression effectuée avec succés!');

    }
    public function edit(Discour $discour)
    {
        return view('discour.edit', ['discour' => $discour]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discour $discour)
    {
        $request->validate([
            'Occasion' => 'required',
            'Type' => 'required',
            'Date_disc'  => 'required',
            'Text_fr'  => 'required',
            'Text_ar'  => 'required',
            'Pj_fr'  => 'required',
            'Pj_ar'  => 'required',
        ]);
        
        $discour->Occasion = $request->Occasion;
        $discour->Type = $request->Type;
        $discour->Date_disc = $request->Date_disc;
        $discour->Text_fr = $request->Text_fr;
        $discour->Text_ar = $request->Text_ar;
        $discour->Pj_fr = $request->Pj_fr;
        $discour->Pj_ar = $request->Pj_ar;
        $discour->save();

        return back()->with('success', 'Modification effectuée avec succés!!');
    }
}
