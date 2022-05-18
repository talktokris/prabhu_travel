<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Destination;
use App\Models\Tour_type;
use App\Models\Tour;
use App\Models\Country;

class adminReportController extends Controller
{
    //

    public function index(){

        return view("prabhu.login.adminHomeSetting");


    }
}
