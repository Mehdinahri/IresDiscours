<?php

namespace App\Http\Controllers;

use App\Models\Discour;
use Illuminate\Http\Request;

class DiscourController extends Controller
{
    public function index(){
        return view('discour.index',['discours'=>Discour::orderBy('Date_disc')->cursor()]); 
    }
}
