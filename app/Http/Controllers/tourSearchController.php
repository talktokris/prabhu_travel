<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Destination;
use App\Models\Tour_type;
use App\Models\Tour;


class tourSearchController extends Controller
{
    //

    public function index(){


        $tourTypeWord = 'Tour Style';
        $RecTourData=Tour::where('status', 1)->orderBy('created_at', 'asc')->limit(20)->get();



        $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
        $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
        $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();

        return view('prabhu.public.searchPage')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("RecTourData"))->with(compact("destinationDataAll"))->with('type', 'normal')->with('tour_type', $tourTypeWord);

  
    }

    public function topDestination( $id=null){




            $RecTourData =Tour::where('status', 1)
                                ->where(function($q) use ($id){
                                    $q->orWhere('from_destination', $id)
                                    ->orWhere('to_destination', $id);
                                })
                                ->get();



            if($id!=''){

                $destData= Destination::where('short_name', $id)->orderBy('id', 'desc')->limit(1)->get();

                if (count($destData) > 0)  {  $tourTypeWord = $destData[0]['full_name']; } 
                else { $tourTypeWord ='Location Not Found';}

            }

            $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
            $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
            $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();

        return view('prabhu.public.searchPage')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("RecTourData"))->with(compact("destinationDataAll"))->with('type', 'top')->with('type_word', $tourTypeWord);


    }



    public function tourType( $id=null){


        if($id!=''){

            $destData= Tour_type::where('short_name', $id)->orderBy('id', 'desc')->limit(1)->get();

            if (count($destData) > 0)  {  $tourTypeWord = $destData[0]['full_name']; } 
            else { $tourTypeWord ='Tour type not found';}

          //  dd($tourTypeWord);

        }



       // $RecTourData = Tour::where('status', 1)->orderBy('id', 'desc')->limit(10)->get();

        $RecTourData =Tour::where('status', 1)
        ->where(function($q) use ($id){
            $q->orWhere('tour_type_one', $id)
            ->orWhere('tour_type_two', $id)
            ->orWhere('tour_type_three', $id)
            ->orWhere('tour_type_four', $id);
        })
        ->get();


           $destinationData = app('App\Http\Controllers\commonMethodController')->destinationData();
            $tourTypeData = app('App\Http\Controllers\commonMethodController')->tourTypeData();
            $destinationDataAll = app('App\Http\Controllers\commonMethodController')->destinationDataAll();

        return view('prabhu.public.searchPage')->with(compact("tourTypeData"))->with(compact("destinationData"))->with(compact("RecTourData"))->with(compact("destinationDataAll"))->with('type', 'tour')->with('type_word', $tourTypeWord)->with('short_word', $id);


    }





    public function tourAjexSubmit($whereGet=null, $typeGet=null){

        if($whereGet=='--'){ $where='';} else {$where=$whereGet;}
        if($typeGet=='--'){ $type='';} else {$type=$typeGet;}






        if(($where!='')&&($type!='')){


            $RecTourData =Tour::where('status', 1)
            ->where(function($q) use ($where){
                $q->orWhere('from_destination', $where)
                ->orWhere('to_destination', $where);
            })
            ->where(function($q) use ($type){
                $q->orWhere('tour_type_one', $type)
                ->orWhere('tour_type_two', $type)
                ->orWhere('tour_type_three', $type)
                ->orWhere('tour_type_four', $type);
            })
            ->get();

        }
        elseif($where !=''){

            $RecTourData =Tour::where('status', 1)
            ->where(function($q) use ($where){
                $q->orWhere('from_destination', $where)
                ->orWhere('to_destination', $where);
            })
            ->get();


        } 
        elseif($type !=''){

            $RecTourData =Tour::where('status', 1)
            ->where(function($q) use ($type){
                $q->orWhere('tour_type_one', $type)
                ->orWhere('tour_type_two', $type)
                ->orWhere('tour_type_three', $type)
                ->orWhere('tour_type_four', $type);
            })
            ->get();

        } else {

            $RecTourData=Tour::where('status', 1)->orderBy('created_at', 'asc')->limit(20)->get();
        }


        if(count($RecTourData)<=0){

            echo '<div class="col-md-12 align-center title" style="padding:2em !important; font-size:1.5em"><p>  No Result Found </p></div>';
    
          }
        


        foreach ($RecTourData as $sRow) {
        
                $hash_id= base64_encode($sRow->id); 
                $url=asset("/");

                if(($sRow->thubnail_img)!=''){ $img_location= url('/').'/'.'images/'.$sRow->id.'/'.$sRow->thubnail_img ;

                        if(!file_exists('images/'.$sRow->id.'/'.$sRow->thubnail_img)){ $img_location= url('/').'/'.'images/no_profile_img.jpg';}

                } else { $img_location= url('/').'/'.'images/no_image.jpg';}


                if(($sRow->large_img)!=''){ $img_location_large= url('/').'/'.'images/'.$sRow->id.'/'.$sRow->large_img ;

                  if(!file_exists('images/'.$sRow->id.'/'.$sRow->large_img)){ $img_location_large= url('/').'/'.'images/no_profile_img.jpg';}

                } else { $img_location_large= url('/').'/'.'images/no_image.jpg';}


                if(($sRow->discount_percentage)>1) { $disSting= '<div class="action font-2">'. $sRow->discount_percentage .'%</div>';}
                else { $disSting='';}
                    $htmlStings=' <div class="col-md-6">
                                    <div class="recom-item border">
                                        <div class="recom-media"><a href="'.$url.'tour-view/'. $hash_id.'">
                                            <div class="pic"><img src="'.$img_location.'" data-at2x="'.$img_location_large .'" alt='.$sRow->tour_title .'></div></a>
                                            <div class="location">'.$sRow->tour_days_text.'</div>
                                        </div>
                                        <!-- Recomended Content-->
                                        <div class="recom-item-body"><a href="'.$url.'tour-view/'. $hash_id.'">
                                            <h6 class="blog-title">'.$sRow->tour_title .'</h6></a>
                                        <div class="stars stars-4"></div>
                                        <div class="recom-price"><span class="font-4">RM '. $sRow->price .'</span></div>
                                        <p class="mb-30">'. $sRow->shot_discription_line .'</p><a href="'.$url.'tour-view/'. $hash_id.'" class="recom-button">Read more</a><a href="'.$url.'tour-view/'. $hash_id.'" class="cws-button small alt">Book now</a>'. $disSting.'
                                        
                                        </div>
                                
                                    </div>
                                    </div>';

                    echo $htmlStings;


  
         } // end of for each loop

       
    }


    public function destinationJson($query=null){



        $destinationData = Destination::select('full_name')->where([['full_name','like', $query.'%'],['status','=', 1]])->orderBy('full_name', 'asc')->get();
        
        return $destinationData->toJson();

        
    }


    public function destinationJson2(Request $request){



        $destinationData = Destination::where([['full_name','like', '%$query'],['status','=', 1]])->orderBy('full_name', 'asc')->limit(16)->get();
        return $destinationData->toJson();
    
        
    }
    
    


}



