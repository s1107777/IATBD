<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuisdierController extends Controller
{
    public function index(){
        return view('homepage.index', [
            'huisdieren' => \App\Models\Huisdier::all()
        ]);
    }

    public function show($huisdier_id){
        return view('huisdier.show', [
            'huisdier' => \App\Models\Huisdier::find($huisdier_id)
        ]); 
    }
}
