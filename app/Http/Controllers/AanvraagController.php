<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AanvraagController extends Controller
{
    public function index(){
        return view('aanvraag.index',[
            'aanvragen' => \App\Models\Aanvraag::all()
        ])
    }
}
