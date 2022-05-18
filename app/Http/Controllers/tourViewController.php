<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Destination;
use App\Models\Tour_type;
use App\Models\Tour;
use App\Models\Tour_image;
use App\Models\Tour_booking;

class tourViewController extends Controller
{
    //

    public function index($hash_id=null, request $request){

        $id=base64_decode($hash_id);

       // dd($id);


        $tourDetails = Tour::where('id','=', $id)->get();

        $tourImageData = Tour_image::where('tour_id','=', $id)->get();
      //  dd($tourImageData);


        $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
        $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
        $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();
        $countryAllData = app('App\Http\Controllers\commonMethodController')->countryAll();



        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
                'tour_id' => 'required|string|min:3|max:20',
                'name' => 'required|string|min:3|max:100',
                'email' => 'required|email',
                'nationality' => 'required|string|min:2|max:100',
                'gender' => 'required|string|min:2|max:100',
                'phone' => 'required|string|min:2|max:15',
                'date' => 'required|required|date_format:Y-m-d',
               

            ]);

            

            $data = $request->all();




                $tourSave = new Tour_booking;

               // dd($request);


                $tourSave->tour_id= $data['id'];
                 $tourSave->booking_staus = 0;
                 $tourSave->name = $data['name'];
                 $tourSave->email = $data['email'];
                 $tourSave->nationality = $data['nationality'];
                 $tourSave->gender = $data['gender'];
                 $tourSave->phone = $data['phone'];
                 $tourSave->booking_date = $data['date'];
                 $tourSave->handle_by = '';
                
                 $tourSave->save();
                 $new_id=$tourSave->id;

                if($tourSave){  

                    $new_hash_id= base64_encode($new_id);
                    
                  //  dd($tourSave->id);

                   // return view('prabhu.public.tourBookingSucess')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("tourImageData"))->with(compact("tourDetails"))->with(compact("destinationDataAll"))->with(compact("countryAllData"))->with('hash_id', $hash_id)->with('new_id', $new_id);
                  //  return Redirect::back()->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("tourImageData"))->with(compact("tourDetails"))->with(compact("destinationDataAll"))->with(compact("countryAllData"))->with('hash_id', $hash_id)->with('flash_message_success', ' New tour package created successfully');

                  return Redirect('/booking-process'.'/'.$new_hash_id);
                }
                     
                else {   

                  //  dd('$tourSave->id');
                    return Redirect::back()->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("tourImageData"))->with(compact("tourDetails"))->with(compact("destinationDataAll"))->with(compact("countryAllData"))->with('hash_id', $hash_id)->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.'); 
                 }

        }

        

        return view('prabhu.public.tourViewPage')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("tourImageData"))->with(compact("tourDetails"))->with(compact("destinationDataAll"))->with(compact("countryAllData"))->with('hash_id', $hash_id);


    }



    public function bookProcessed($hash_id=null){


                $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
        $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
        $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();
        $countryAllData = app('App\Http\Controllers\commonMethodController')->countryAll();


        $book_id= base64_decode($hash_id);



        return view('prabhu.public.tourBookingSucess')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("destinationDataAll"))->with(compact("countryAllData"))->with('book_id', $book_id);

    }



}
