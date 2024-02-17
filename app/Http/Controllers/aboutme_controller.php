<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutme_controller extends Controller
{

    public function show(){
    return view('aboutme')
    ->with('name' , 'James Dy')
    ->with('age' , 23)
    ->with('email' , 'jamesdy02@gmail.com');
    }
}
?>