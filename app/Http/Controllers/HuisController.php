<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Image as Image;

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
    public function create(){
        return view('huis.create');
    }
    public function store(Request $request){     
        
        $file = $request->file('foto');
        $filename = $file->getClientOriginalName();
        $path = '/image/' . $filename;

        $image = new Image;
        $image->image = $path;
        $image->huis_id = 1;
          
        try {
            $image->save();
            return redirect('/home');
        } catch (\Throwable $th) {
            return redirect('/profiel');
        }
        
        
        
    }
}
