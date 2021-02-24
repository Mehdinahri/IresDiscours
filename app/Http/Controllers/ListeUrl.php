<?php

namespace App\Http\Controllers;

use App\Models\Liste_url_resolution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeUrl extends Controller
{
    public function index(){
        return view('listeUrl.index',['urls'=>Liste_url_resolution::orderByDesc('Ann_e')->cursor()]); 
    }

    public function create()
    {
        return view("listeUrl.Ajouter");
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
            'R_solution' => 'required',
            'Ann_e' => 'required',
            'URL_Anglais' => 'required',
            'URL_Fran_ais' => 'required',
            'URL_Arabe' => 'required',
        ]);

        $url               = new Liste_url_resolution();
        $url->R_solution = $request->R_solution;
        $url->id = 1;
        $url->Ann_e = $request->Ann_e;
        $url->URL_Anglais = $request->URL_Anglais;
        $url->URL_Fran_ais = $request->URL_Fran_ais;
        $url->URL_Arabe = $request->URL_Arabe;
        $url->save();

        $affected = DB::update(
                'update `liste_url_resolutions` set `id`= `id-res`'
            );

        return back()->with('success', 'Ajout effectué avec succés!');
    }

    public function destroy($id)
    {
        $url = Liste_url_resolution::find($id);
        $url->delete();
        return back()->with('success', 'Suppression effectuée avec succés!');

    }
    public function edit($id)
    {
        $url = Liste_url_resolution::find($id);
        return view('listeUrl.edit', ['url' => $url]);
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
            'R_solution' => 'required',
            'Ann_e' => 'required',
            'URL_Anglais' => 'required',
            'URL_Fran_ais' => 'required',
            'URL_Arabe' => 'required',
        ]);
        $url =  Liste_url_resolution::find($id);
        $url->R_solution = $request->R_solution;
        $url->Ann_e = $request->Ann_e;
        $url->URL_Anglais = $request->URL_Anglais;
        $url->URL_Fran_ais = $request->URL_Fran_ais;
        $url->URL_Arabe = $request->URL_Arabe;
        $url->save();

        return back()->with('success', 'Modification effectuée avec succés!!');
    }
}
