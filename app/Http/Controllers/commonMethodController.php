<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Tour_type;

use App\Models\Country;

class commonMethodController extends Controller
{
    //


 

    public function destinationDataAll(){

        $destinationDataAll = Destination::where([['status','=', 1]])->orderBy('full_name', 'asc')->limit(16)->get();
  
        return $destinationDataAll;
  
  
    }



    public function destinationData(){

        $destinationData = Destination::where([['home_page_status','=', 1],['status','=', 1]])->orderBy('full_name', 'asc')->limit(16)->get();
  
        return $destinationData;
  
  
    }






    public function tourTypeData(){

        $tourTypeData = Tour_type::where('status', 1)->orderBy('full_name', 'asc')->limit(20)->get();
  
        return $tourTypeData;
  
    }

    public function countryAll(){

        $countryData = Country::where('status', 1)->orderBy('Country_Name', 'asc')->get();
  
        return $countryData;
  
    }




   
   
}
