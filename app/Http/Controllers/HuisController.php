<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuisController extends Controller
{
    public function index(){
        return view('huis.index', [
            'huis' => \App\Models\Huis::all()
        ]);
    }
    public function show($id){
        return view('huis.show', [
            'huis' => \App\Models\Huis::find($id),
            'foto' => \App\Models\Image::all()
        ]);
    }
}
