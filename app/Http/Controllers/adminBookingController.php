<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Destination;
use App\Models\Tour_type;
use App\Models\Tour;
use App\Models\Country;
use App\Models\Tour_booking;

class adminBookingController extends Controller
{
    //

    public function search(){

        $recentData = Tour_booking::orderBy('id', 'desc')->get();

      

        return view("prabhu.login.adminBookingSearch")->with(compact("recentData"));


    }



    public function recentBooking(){

        $recentData = Tour_booking::limit(50)->orderBy('id', 'desc')->get();

      

        return view("prabhu.login.adminRecentBooking")->with(compact("recentData"));


    }

    public function panding(){

        return view("prabhu.login.adminUsers");


    }
}
