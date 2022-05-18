<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Destination;
use App\Models\Tour_type;

class contactPageController extends Controller
{
    //

    public function index(){


        $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
        $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
        $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();
       
        $tourTypeData = Tour_type::where('status', 1)->orderBy('full_name', 'asc')->limit(20)->get();

    
  
        return view('prabhu.public.contactPage')->with(compact("tourTypeData"))->with(compact("destinationData")) ->with(compact("destinationDataAll"));;
  
    
     }
}
