<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Tour_type;
use App\Models\Destination;
use Intervention\Image\Facades\Image;



class adminSettingController extends Controller
{
 
    //

 

    public function home(request $request){


        $tourTypes =  Destination::get();
        $tourTypesActives =  Destination::where('home_page_status','=',1)->get();

            if ('POST' === $request->getMethod()){

                $validatedData = $request->validate([
                    'full_name' => 'required|string|min:3|max:50',
                    'status' => 'required|numeric|between:0,1',
                //  'usd_amount' => 'required|numeric|between:5,500',
                    //'usd_amount' => 'required|numeric|lte:'.$CashWalletTotalRound,
                    ]);
   
      
         
                $data = $request->all();

   
                if($data['full_name']!=''){

                        $tourSave = new Destination;

                        $short_name=str_replace(' ', '-', $data['full_name']);
                        $short_name=str_replace('&', '-', $short_name);
                        $short_name=strtolower($short_name);

                        $tourSave->full_name= $data['full_name'];
                        $tourSave->short_name= $short_name;
                        $tourSave->status = $data['status'];
                        $tourSave->save();

                        if($tourSave){   return redirect("pb/admin/setting-home-page")->with(compact("tourTypes"))->with(compact("tourTypesActives"))->with('flash_message_success', ' New tour Destination created successfully');  } 
                        else {   return redirect("pb/admin/setting-home-page")->with(compact("tourTypes"))->with(compact("tourTypesActives"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }
        
                }


     

        } 

        else {   return view("prabhu.login.adminHomeSetting")->with(compact("tourTypes"))->with(compact("tourTypesActives"));   }





    }


    public function homeAction(request $request, $hash_id=null){


       

        $id= base64_decode($hash_id);

      //  dd($id);


        $tourTypes =  Destination::get();
        $tourEditFills =  Destination::where('id', $id)->limit(1)->get();
        $tourTypesActives =  Destination::where('home_page_status','=',1)->get();

        //$RecTourData=Tour::where('status', 1)->orderBy('created_at', 'asc')->limit(20)->get();
       // dd($tourEditFills);

            if ('POST' === $request->getMethod()){

                $validatedData = $request->validate([
                   // 'full_name' => 'required|string|min:3|max:50',
                    'status' => 'required|numeric|between:0,1',
                //  'usd_amount' => 'required|numeric|between:5,500',
                    //'usd_amount' => 'required|numeric|lte:'.$CashWalletTotalRound,
                    ]);
   
      
         
                $data = $request->all();

               // dd($data['data']);

   
                if($data['status']!=''){

                       // $tourSave = new Destination;

                        
                        $id=$data['id'];
                    

               

                        $tourSave = Destination::where("id", $id)->update(["home_page_status" => $data['status']]);

                       // $tourSave->full_name= $data['full_name'];
                        //$tourSave->short_name= $short_name;
                       // $tourSave->status = $data['status'];
                       // $tourSave->save();

                        if($tourSave){   return redirect("pb/admin/setting-home-page")->with(compact("tourTypes"))->with(compact("tourTypesActives"))->with('flash_message_success', ' Home page status updated successfully');  } 
                        else {   return redirect("pb/admin/setting-home-page")->with(compact("tourTypes"))->with(compact("tourTypesActives"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }
        
                }


     

        } 
        
        else {   return view("prabhu.login.adminHomePageAction")->with(compact("tourTypes"))->with(compact("tourEditFills"));   }


    }



    public function tour(request $request){


        $tourTypes =  Tour_type::get();

            if ('POST' === $request->getMethod()){

                $validatedData = $request->validate([
                    'full_name' => 'required|string|min:3|max:50',
                    'status' => 'required|numeric|between:0,1',
                //  'usd_amount' => 'required|numeric|between:5,500',
                    //'usd_amount' => 'required|numeric|lte:'.$CashWalletTotalRound,
                    ]);
   
      
         
                $data = $request->all();

   
                if($data['full_name']!=''){

                        $tourSave = new Tour_type;

                        $short_name=str_replace(' ', '-', $data['full_name']);
                        $short_name=str_replace('&', '-', $short_name);
                        $short_name=strtolower($short_name);

                        $tourSave->full_name= $data['full_name'];
                        $tourSave->short_name= $short_name;
                        $tourSave->status = $data['status'];
                        $tourSave->save();

                        if($tourSave){   return redirect("pb/admin/setting-tour-category")->with(compact("tourTypes"))->with('flash_message_success', ' New tour category created successfully');  } 
                        else {   return redirect("pb/admin/setting-tour-category")->with(compact("tourTypes"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }
        
                }


     

        } 

        else {   return view("prabhu.login.adminTours")->with(compact("tourTypes"));   }


    }

    


    public function tourEdit(request $request, $hash_id=null){

        $id= base64_decode($hash_id);

      //  dd($id);


        $tourTypes =  Tour_type::get();
        $tourEditFills =  Tour_type::where('id', $id)->limit(1)->get();
        //$RecTourData=Tour::where('status', 1)->orderBy('created_at', 'asc')->limit(20)->get();
       // dd($tourEditFills);

            if ('POST' === $request->getMethod()){

                $validatedData = $request->validate([
                    'full_name' => 'required|string|min:3|max:50',
                    'status' => 'required|numeric|between:0,1',
                //  'usd_amount' => 'required|numeric|between:5,500',
                    //'usd_amount' => 'required|numeric|lte:'.$CashWalletTotalRound,
                    ]);
   
      
         
                $data = $request->all();

               // dd($data['data']);

   
                if($data['full_name']!=''){

                        $tourSave = new Tour_type;

                        
                        $id=$data['id'];
                    

                        $short_name=str_replace(' ', '-', $data['full_name']);
                        $short_name=str_replace('&', '-', $short_name);
                        $short_name=strtolower($short_name);

                        $tourSave = Tour_type::where("id", $id)->update(["full_name" => $data['full_name'],"short_name" => $short_name,"status" => $data['status']]);

                       // $tourSave->full_name= $data['full_name'];
                        //$tourSave->short_name= $short_name;
                       // $tourSave->status = $data['status'];
                       // $tourSave->save();

                        if($tourSave){   return redirect("pb/admin/setting-tour-category")->with(compact("tourTypes"))->with('flash_message_success', ' New tour category updated successfully');  } 
                        else {   return redirect("pb/admin/setting-tour-category")->with(compact("tourTypes"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }
        
                }


     

        } 
        
        else {   return view("prabhu.login.adminToursEdit")->with(compact("tourTypes"))->with(compact("tourEditFills"));   }


    }


    public function tourDelete($hash_id=null){


        $tourTypes =  Tour_type::get();

        if($hash_id!=''){

            $id = base64_decode($hash_id);


            $deleteTourType = Tour_type::where('id', '=', $id)->delete();


            if($deleteTourType){   return redirect('pb/admin/setting-tour-category')->with('flash_message_success', 'Tour catagory deleted sucessfully');  }
            else {   return redirect('pb/admin/setting-tour-category')->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }


        }

      


    }

    public function destinaton(request $request){


        $tourTypes =  Destination::get();

            if ('POST' === $request->getMethod()){

                $validatedData = $request->validate([
                    'full_name' => 'required|string|min:3|max:50',
                    'status' => 'required|numeric|between:0,1',
                //  'usd_amount' => 'required|numeric|between:5,500',
                    //'usd_amount' => 'required|numeric|lte:'.$CashWalletTotalRound,
                    ]);
   
      
         
                $data = $request->all();

   
                if($data['full_name']!=''){

                        $tourSave = new Destination;

                        $short_name=str_replace(' ', '-', $data['full_name']);
                        $short_name=str_replace('&', '-', $short_name);
                        $short_name=strtolower($short_name);

                        $tourSave->full_name= $data['full_name'];
                        $tourSave->short_name= $short_name;
                        $tourSave->status = $data['status'];
                        $tourSave->save();

                        if($tourSave){   return redirect("pb/admin/setting-destination")->with(compact("tourTypes"))->with('flash_message_success', ' New tour Destination created successfully');  } 
                        else {   return redirect("pb/admin/setting-destination")->with(compact("tourTypes"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }
        
                }


     

        } 

        else {   return view("prabhu.login.adminDestination")->with(compact("tourTypes"));   }





    }


    public function destinatonEdit(request $request, $hash_id=null){

        $id= base64_decode($hash_id);

      //  dd($id);


        $tourTypes =  Destination::get();
        $tourEditFills =  Destination::where('id', $id)->limit(1)->get();
        //$RecTourData=Tour::where('status', 1)->orderBy('created_at', 'asc')->limit(20)->get();
       // dd($tourEditFills);

            if ('POST' === $request->getMethod()){

                $validatedData = $request->validate([
                    'full_name' => 'required|string|min:3|max:50',
                    'status' => 'required|numeric|between:0,1',
                //  'usd_amount' => 'required|numeric|between:5,500',
                    //'usd_amount' => 'required|numeric|lte:'.$CashWalletTotalRound,
                    ]);
   
      
         
                $data = $request->all();

               // dd($data['data']);

   
                if($data['full_name']!=''){

                       // $tourSave = new Destination;

                        
                        $id=$data['id'];
                    

                        $short_name=str_replace(' ', '-', $data['full_name']);
                        $short_name=str_replace('&', '-', $short_name);
                        $short_name=strtolower($short_name);

                        $tourSave = Destination::where("id", $id)->update(["full_name" => $data['full_name'],"short_name" => $short_name,"status" => $data['status']]);

                       // $tourSave->full_name= $data['full_name'];
                        //$tourSave->short_name= $short_name;
                       // $tourSave->status = $data['status'];
                       // $tourSave->save();

                        if($tourSave){   return redirect("pb/admin/setting-destination")->with(compact("tourTypes"))->with('flash_message_success', ' New tour destination updated successfully');  } 
                        else {   return redirect("pb/admin/setting-destination")->with(compact("tourTypes"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }
        
                }


     

        } 
        
        else {   return view("prabhu.login.adminDestinationEdit")->with(compact("tourTypes"))->with(compact("tourEditFills"));   }


    }



    public function destinationDelete($hash_id=null){


        $tourTypes =  Destination::get();

        if($hash_id!=''){

            $id = base64_decode($hash_id);


            $deleteTourType = Destination::where('id', '=', $id)->delete();


            if($deleteTourType){   return redirect('pb/admin/setting-destination')->with('flash_message_success', 'Tour destination deleted sucessfully');  }
            else {   return redirect('pb/admin/setting-destination')->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }


        }

      


    }

    public function destinationImageUpload($hash_id=null, request $request){


        $destinationData= Destination::where('id','=', base64_decode($hash_id))->get();


        $savingPath='images';


        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
                'image_name'=>'required|mimes:png,jpg,jpeg|max:5048',

            ]);

            $data = $request->all();


            $imageName = $data['image_name'];
            $get_id = $data['get_id'];
            $getImageName= $get_id.'.jpg';

            $newPath= $savingPath.'/destinations';
  
            $thumbImgName=$getImageName;
  
              $img = Image::make($imageName)->fit(324, 244, function ($constraint) {
                  $constraint->upsize();
              });
               $img->save($newPath.'/'.$thumbImgName, 60);



               $tourSave = Destination::where("id", $get_id)->update(["thumbnail_img" => $thumbImgName]);

               if($tourSave){
                    return redirect("pb/admin/setting-destination")->with('flash_message_success', ' Image uploaded successfully');  } 
                else {   return  redirect("pb/admin/setting-destination")->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }



        }

   

        return view("prabhu/login/adminDestinationUploadImage")->with(compact("destinationData"))->with('hash_id', $hash_id);;

    }
}
