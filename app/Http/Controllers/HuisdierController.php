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

    public function create(){
        return view('homepage.create', [
            'huisdieren' => \App\Models\Huisdier::all()
        ]);
    }

    public function store(Request $request, \App\Models\Aanvraag $aanvraag){
        $aanvraag->naam = $request->input('naam');
        $aanvraag->naamDier = $request->input('huisdierNaam');
        $aanvraag->vraag = $request->input('vraag');
        
        try{
            $aanvraag->save();
            return redirect('/home');
        }
        catch(Exception $e){
            return redirect('/home/create');
        }

    }
}
