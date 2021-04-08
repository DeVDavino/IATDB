<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class RequestController extends Controller
{
    public function create(){
        return view('request');
    }

    public function store(Request $request, \App\Models\Request $question){

        $question->user_id = Auth::user()->id;
        $question->name = $request->input('name');
        $question->email = $request->input('email');
        $question->phone_number = $request->input('phone_number');
        $question->description = $request->input('description');
  
       try{
        $question->save();
        return redirect('/');
        }
        catch(Exception $e){
              return redirect('/');
        }
        
     }
}
