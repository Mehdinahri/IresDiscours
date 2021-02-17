<?php

namespace App\Http\Controllers;

use App\Models\Discour;
use Illuminate\Http\Request;

class DiscourController extends Controller
{
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
}
