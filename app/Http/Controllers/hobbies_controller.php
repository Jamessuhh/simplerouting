<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hobbies_controller extends Controller
{
    public function show(){
        return view('hobbies')
        ->with('hobby1' , 'eat')
        ->with('hobby2' , 'sleep')
        ->with('hobby3' , 'listen music');
        }
}
?>