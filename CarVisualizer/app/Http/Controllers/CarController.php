<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
  public function carColour(){
    return view('car.colour');
  }

//  public function select(){
//    return view('car.colour');
//  }

}
