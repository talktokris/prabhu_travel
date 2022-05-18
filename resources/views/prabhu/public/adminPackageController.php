<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Intervention\Image\ImageManager;

use App\Models\Destination;
use App\Models\Tour_type;
use App\Models\Tour;
use App\Models\Tour_image;
use Intervention\Image\Facades\Image;


class adminPackageController extends Controller
{
    //


    public function create(request $request){


        $tourTypeData= Tour_type::where('status','=',1)->get();
        $destinationsData = Destination::where('status','=',1)->get();

       

            if ('POST' === $request->getMethod()){

              //  dd($request);

                $validatedData = $request->validate([
                    'tour_title' => 'required|string|min:3|max:100',
                    'shot_discription_line' => 'required|string|min:3|max:100',
                    'from_destination' => 'required|string|min:3|max:100',
                    'to_destination' => 'required|string|min:2|max:100',
                    'tour_type_one' => 'required|string|min:2|max:100',
                    'age_range' => 'required|string|min:2|max:10',
                    'operated_in' => 'required|string|min:2|max:100',
                    'max_tour_size' =>  'required|numeric|between:0,100',
                    'tour_days_number' =>  'required|numeric|between:0,100',
                    'tour_days_text' => 'required|string|min:2|max:100',
                    'price' =>  'required|numeric|between:1,5000',
                    'tour_information' => 'required|string|min:2|max:2000',
                    'tour_details' => 'required|string|min:2|max:2000',
                    'status' => 'required|numeric|between:0,1',
                    'home_page_status' => 'required|numeric|between:0,1',
                  
                //  'usd_amount' => 'required|numeric|between:5,500',
                    //'usd_amount' => 'required|numeric|lte:'.$CashWalletTotalRound,
                    ]);
   
      
         
                $data = $request->all();

              //  dd($data);

   
                if($data['tour_title']!=''){

                        $tourSave = new Tour;

                        $tourSave->tour_title= $data['tour_title'];
                         $tourSave->shot_discription_line = $data['shot_discription_line'];
                         $tourSave->from_destination = $data['from_destination'];
                         $tourSave->to_destination = $data['to_destination'];
                         $tourSave->tour_type_one = $data['tour_type_one'];
                         $tourSave->tour_type_two = $data['tour_type_two'];
                         $tourSave->tour_type_three = $data['tour_type_three'];
                         $tourSave->tour_type_four = $data['tour_type_four'];
                         $tourSave->age_range = $data['age_range'];
                         $tourSave->operated_in = $data['operated_in'];
                         $tourSave->max_tour_size = $data['max_tour_size'];
                         $tourSave->tour_days_number = $data['tour_days_number'];
                         $tourSave->tour_days_text = $data['tour_days_text'];
                         $tourSave->discount_percentage = $data['discount_percentage'];
                         $tourSave->price = $data['price'];
                         $tourSave->tour_information = $data['tour_information'];
                         $tourSave->tour_details = $data['tour_details'];
                         $tourSave->home_page_status = $data['home_page_status'];
                         $tourSave->status = $data['status'];
                         $tourSave->seo_keyword = $data['seo_keyword'];
                         $tourSave->seo_discription = $data['seo_discription'];
                         $tourSave->save();

                        if($tourSave){   return redirect("pb/admin/package-search")->with(compact("tourTypeData"))->with(compact("destinationsData"))->with('flash_message_success', ' New tour package created successfully');  } 
                        else {   return redirect("pb/admin/package-search")->with(compact("tourTypeData"))->with(compact("destinationsData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }
        
                }


     

        } 

        else {    return view("prabhu.login.adminPackageCreate")->with(compact("tourTypeData"))->with(compact("destinationsData"));  }


    }




    public function edit(request $request, $hash_id){

        $id= base64_decode($hash_id);


        $tourTypeData= Tour_type::where('status','=',1)->get();
        $destinationsData = Destination::where('status','=',1)->get();
        $currentTourData= Tour::where('id','=',$id)->get();

       

            if ('POST' === $request->getMethod()){

              //  dd($request);

                $validatedData = $request->validate([
                    'tour_title' => 'required|string|min:3|max:100',
                    'shot_discription_line' => 'required|string|min:3|max:100',
                    'from_destination' => 'required|string|min:3|max:100',
                    'to_destination' => 'required|string|min:2|max:100',
                    'tour_type_one' => 'required|string|min:2|max:100',
                    'age_range' => 'required|string|min:2|max:10',
                    'operated_in' => 'required|string|min:2|max:100',
                    'max_tour_size' =>  'required|numeric|between:0,100',
                    'tour_days_number' =>  'required|numeric|between:0,100',
                    'tour_days_text' => 'required|string|min:2|max:100',
                    'price' =>  'required|numeric|between:1,5000',
                    'tour_information' => 'required|string|min:2|max:2000',
                    'tour_details' => 'required|string|min:2|max:2000',
                    'status' => 'required|numeric|between:0,1',
                    'home_page_status' => 'required|numeric|between:0,1',
                  
                //  'usd_amount' => 'required|numeric|between:5,500',
                    //'usd_amount' => 'required|numeric|lte:'.$CashWalletTotalRound,
                    ]);
   
      
         
                $data = $request->all();

              //  dd($data);

   
                if($data['tour_title']!=''){

                        $tourSave = new Tour;

                        $id= $data['id'];

                        $tourSave->tour_title= $data['tour_title'];
                         $tourSave->shot_discription_line = $data['shot_discription_line'];
                         $tourSave->from_destination = $data['from_destination'];
                         $tourSave->to_destination = $data['to_destination'];
                         $tourSave->tour_type_one = $data['tour_type_one'];
                         $tourSave->tour_type_two = $data['tour_type_two'];
                         $tourSave->tour_type_three = $data['tour_type_three'];
                         $tourSave->tour_type_four = $data['tour_type_four'];
                         $tourSave->age_range = $data['age_range'];
                         $tourSave->operated_in = $data['operated_in'];
                         $tourSave->max_tour_size = $data['max_tour_size'];
                         $tourSave->tour_days_number = $data['tour_days_number'];
                         $tourSave->tour_days_text = $data['tour_days_text'];
                         $tourSave->discount_percentage = $data['discount_percentage'];
                         $tourSave->price = $data['price'];
                         $tourSave->tour_information = $data['tour_information'];
                         $tourSave->tour_details = $data['tour_details'];
                         $tourSave->home_page_status = $data['home_page_status'];
                         $tourSave->status = $data['status'];
                         $tourSave->seo_keyword = $data['seo_keyword'];
                         $tourSave->seo_discription = $data['seo_discription'];


                         $tourSave = Tour::where("id", $id)->update(["tour_title" => $data['tour_title'],"shot_discription_line" => $data['shot_discription_line'],"from_destination" => $data['from_destination'],
                         "to_destination" => $data['to_destination'],"tour_type_one" => $data['tour_type_one'],"tour_type_two" => $data['tour_type_two'],"tour_type_three" => $data['tour_type_three']
                         ,"tour_type_four" => $data['tour_type_four'],"age_range" => $data['age_range'],"operated_in" => $data['operated_in'],"max_tour_size" => $data['max_tour_size'],"max_tour_size" => $data['max_tour_size'],
                         "tour_days_number" => $data['tour_days_number'],"tour_days_text" => $data['tour_days_text'],"discount_percentage" => $data['discount_percentage']
                         ,"price" => $data['price'],"tour_information" => $data['tour_information'],"tour_details" => $data['tour_details'],"home_page_status" => $data['home_page_status'],
                         "status" => $data['status'],"seo_keyword" => $data['seo_keyword'],"seo_discription" => $data['seo_discription']]);

   
                       //  $tourSave->save()->where("id", $id);

                        if($tourSave){   return redirect("pb/admin/package-search")->with(compact("tourTypeData"))->with(compact("destinationsData"))->with('flash_message_success', ' New tour package Updated successfully');  } 
                        else {   return redirect("pb/admin/package-search")->with(compact("tourTypeData"))->with(compact("destinationsData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }
        
                }


     

        } 

        else {    return view("prabhu.login.adminPackageEdit")->with(compact("tourTypeData"))->with(compact("destinationsData"))->with(compact("currentTourData"));  }


    }






    



    public function search(){


        $tourData= Tour::get();

        //dd($tourData);



        return view("prabhu.login.adminSeachPackage")->with(compact("tourData"));
       // echo "<pre>";
        print_r($tourData);
       // echo "</pre>";


        


       // return view("prabhu.login.adminUsers");


    }



    public function delete($hash_id=null){


       // $tourTypes =  Tour_type::get();

        if($hash_id!=''){

            $id = base64_decode($hash_id);


            $deleteTourType = Tour::where('id', '=', $id)->delete();


            if($deleteTourType){   return redirect('pb/admin/package-search')->with('flash_message_success', 'Tour package deleted sucessfully');  }
            else {   return redirect('pb/admin/package-search')->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }


        }

      


    }





    
    public function deleteConfirm($hash_id=null){





        return view("prabhu.login.adminPackageDeleteConfrom")->with('hash_id', $hash_id);

        
    }



    public function imageUpload($hash_id=null, request $request){


        $toursData= Tour::where('id','=', base64_decode($hash_id))->get();
        $tourImageData = Tour_image::where('tour_id','=', base64_decode($hash_id))->get();

        $savingPath='images';


        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
                'image_name'=>'required|mimes:png,jpg,jpeg|max:5048',

            ]);

            $data = $request->all();


            $imageName = $data['image_name'];
            $get_id = $data['get_id'];
            $getImageName= date('Y-m-d-His').'-'.$imageName->getClientOriginalName();


            $newPath= $savingPath.'/'.$get_id;

          if (!file_exists($newPath)) {  mkdir($newPath, 0777, true);  }


          $thumbImgName='thumb-'.$getImageName;
          $midImgName='mid-'.$getImageName;
          $largeImgName='large-'.$getImageName;
  

         


         //   $img = Image::make('imageNewName')->resize(300, 200);


            // Mid Image Save

            $img = Image::make($imageName)->fit(324, 244, function ($constraint) {
                $constraint->upsize();
            });
             $img->save($newPath.'/'.$thumbImgName, 60);


            $img2 = Image::make($imageName)->fit(770, 240, function ($constraint) {
                $constraint->upsize();
            });
             $img2->save($newPath.'/'.$midImgName, 100);

            // Large Image Save
            $img3 = Image::make($imageName)->fit(1500, 600, function ($constraint) {
                $constraint->upsize();
            });

            $img3->save($newPath.'/'.$largeImgName, 60);




                $tourSave = Tour::where("id", $get_id)->update(["thubnail_img" => $midImgName]);
         

                $tourSave = new Tour_image;

            

                 $tourSave->tour_id= $get_id;
                 $tourSave->thumbnail_img = $thumbImgName;
                 $tourSave->mid_img = $midImgName;
                 $tourSave->large_img = $largeImgName;
               
                 $tourSave->save();

                if($tourSave){
                     return redirect("pb/admin/package/image-upload/".$hash_id)->with(compact("toursData"))->with(compact("tourImageData"))->with('hash_id', $hash_id)->with('flash_message_success', ' Image uploaded successfully');  } 
                else {   return  redirect("pb/admin/package/image-upload/".$hash_id)->with(compact("toursData"))->with(compact("tourImageData"))->with('hash_id', $hash_id)->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }



           

          //  dd($data);





        }


        return view("prabhu.login.adminPackageUploadImage")->with(compact("toursData"))->with(compact("tourImageData"))->with('hash_id', $hash_id);

        
    }


    public function deleteImage($hash_id=null, $pack_id=null){

        $toursData= Tour::where('id','=', base64_decode($hash_id))->get();
        $tourImageData = Tour_image::where('tour_id','=', base64_decode($hash_id))->get();

       

        if($hash_id!=''){

            $id = base64_decode($hash_id);

            $pac_id_decode= base64_decode($pack_id);

            $deleteImagData = Tour_image::where('id', '=', $id)->get();

            $img_location= 'images/'.$pac_id_decode;

            foreach($deleteImagData as $dRow){

               $imgDelNmOne = $img_location.'/'.$dRow->large_img;
             //  dd($imgDelNmOne);
              if (file_exists($imgDelNmOne)) { unlink($imgDelNmOne);  break; }

               $imgDelNmTwo = $img_location.'/'.$dRow->mid_img;
               if (file_exists($imgDelNmTwo)) { unlink($imgDelNmTwo);  break; }

               $imgDelNmThree = $img_location.'/'.$dRow->thumbnail_img;
               if (file_exists($imgDelNmThree)) { unlink($imgDelNmThree);  break; }

            }



            $deleteTourType = Tour_image::where('id', '=', $id)->delete();


         



            if($deleteTourType){
                return redirect("pb/admin/package/image-upload/".$pack_id)->with(compact("toursData"))->with(compact("tourImageData"))->with('hash_id', $pack_id)->with('flash_message_success', ' Image deleted successfully');  } 
           else {   return  redirect("pb/admin/package/image-upload/".$pack_id)->with(compact("toursData"))->with(compact("tourImageData"))->with('hash_id', $pack_id)->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }



        }

    }

    
}
