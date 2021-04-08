<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AanvraagController extends Controller
{
    public function index(){
        return view('aanvraag.index',[
            'aanvragen' => \App\Models\Aanvraag::all()
        ]);
    }
    public function show($aanvraag_id){
        return view('aanvraag.show', [
            'aanvraag' => \App\Models\Aanvraag::find($aanvraag_id)
        ]); 
    }
    public function destroy($aanvraag_id){
        \App\Models\Aanvraag::destroy($aanvraag_id);
        return redirect('/aanvraag');
    }
    public function update($id){
        $user = \App\Models\User::find($id);
        $user->blocked = true;
        
        try{
            $user->save();
            return redirect('/home');
        }
        catch(Exception $e){
            return redirect('/home/create');
        }
    }
}
