<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Destination;
use App\Models\Tour_type;
use App\Models\Tour;
use App\Models\Country;

class homePageController extends Controller
{
    //

 public function index(){


  //  return view('prabhu.public.homePage');


        $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
        $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
        $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();

   

        $RecTourData = Tour::where([['status','=', 1], ['home_page_status','=',1]])->orderBy('id', 'desc')->limit(10)->get();


        

      return view('prabhu.public.homePage')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("RecTourData"))->with(compact("destinationDataAll"));
      


 }

}
