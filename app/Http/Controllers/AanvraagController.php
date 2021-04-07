<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    // public function update(\App\Models\User $user){
    //     $user = DB::select('update users set blocked_until = NOW() WHERE user_id = 2');
    //     $user->save();
    //     return redirect('/home');
    // }
}
