<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
  public function selectCar(){
    return view('car.model');
  }

  public function display(Request $request){
      $model = $request->model;

    if ($model == 1){
        $ext_colours = ['Black', 'Blue', 'Red', 'White', 'Grey'];
        $int_colours = ['Black', 'Grey', 'Beige'];

        return view('car.colour')->with('ext_colours', $ext_colours)->with('int_colours', $int_colours)->with('model', 'Sedan');
    }
    elseif($model == 2){
        $ext_colours = ['White', 'Blue', 'Red', 'Green', 'Grey'];
        $int_colours = ['Black', 'Brown', 'Beige'];

        return view('car.colour')->with('ext_colours', $ext_colours)->with('int_colours', $int_colours)->with('model', 'SUV');

    }
    elseif ($model == 3){
        $ext_colours = ['Black', 'Blue', 'Red', 'White', 'Grey'];
        $int_colours = ['Black', 'Grey', 'Red'];

        return view('car.colour')->with('ext_colours', $ext_colours)->with('int_colours', $int_colours)->with('model', 'Coupe');

    }
    else{
        return view('car.model');
    }

  }



//  public function select(){
//    return view('car.colour');
//  }

}
