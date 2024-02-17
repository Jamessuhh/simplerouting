<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skills_controller extends Controller
{
    public function show(){
        return view('skills')
        ->with('skill1' , 'eat 5 rice in mang inasal')
        ->with('skill2' , 'sleep for 12 hrs')
        ->with('skill3' , 'cook rice and egg');
        }
}
?>