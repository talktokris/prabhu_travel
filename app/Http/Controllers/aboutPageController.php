<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Destination;
use App\Models\Tour_type;

class aboutPageController extends Controller
{
    //

    public function index(){


      $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
      $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
      $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();

      return view('prabhu.public.aboutPage')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("destinationDataAll"));

    
     }



     public function services(){


      $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
      $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
      $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();

      return view('prabhu.public.servicesPage')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("destinationDataAll"));



    
     }



     public function licensing(){


      $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
      $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
      $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();



      return view('prabhu.public.licensingPage')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("destinationDataAll"));

    
     }




     
}
