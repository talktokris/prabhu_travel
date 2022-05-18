<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Destination;
use App\Models\Tour_type;
use App\Models\Tour;
use App\Models\Country;
use App\Models\Tour_booking;
class adminDashboardController extends Controller
{
    //


    public function index(){


        $recentData = Tour_booking::limit(50)->orderBy('id', 'desc')->get();

        $allPac= Tour::get()->count();
        $activePac= Tour::where('status','=', 1)->get()->count();
        $pendingPac= Tour::where('status','=', 0)->get()->count();

        return view("prabhu.login.adminDashboard")->with(compact("recentData"))->with('allPac', $allPac)->with('activePac', $activePac)->with('pendingPac', $pendingPac);


    }


    public function login(){

        return view("prabhu.login.adminLogin");


    }

    public function register(){


    }
}
