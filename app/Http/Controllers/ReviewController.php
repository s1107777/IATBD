<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('review.index', [
            'reviews' => \App\Models\Review::all()
        ]);
    }
    public function create(){
        return view('review.create', [
            'reviews' => \App\Models\Review::all()
        ]);
    }
    public function store(Request $request, \App\Models\Review $review){
        $review->naam = $request->input('naam');
        $review->bericht = $request->input('bericht');
        
        try{
            $review->save();
            return redirect('/review');
        }
        catch(Exception $e){
            return redirect('/review/index');
        }

    }
}
