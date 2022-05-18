@extends('prabhu.public.layouts.master')
@section('title','Home')
@section('contents')

<div class="content-body">
  <div class="container">


  <div class="search-hotels mb-40 mt-40 pattern">
      <div class="tours-container">
        <div class="tours-box">
          <div class="tours-search mb-20 mt-20">
            <form onsubmit="return false;" class="form search divider-skew">
              <div class="search-wrap">
                <div class="ui-widget">
                <input type="text" placeholder="Destination" name="destinations" id="destinations" class="form-control search-field " value="<?php if($type=="top"){ echo $type_word ;} ?>"><i class="flaticon-suntour-map search-icon"></i>
                </div>
              </div>
            </form>


            <div class="selection-box "><i class="flaticon-favorite box-icon"></i>
              <select id="tour_type" name="tour_type">
                <?php if($type=="tour"){ $type_short_name=$short_word; $type_full_name = $type_word ;} 
                      else { $type_short_name=''; $type_full_name='Tour Category' ;} ?>
                    

                <option value="{{ $type_short_name }}">{{ $type_full_name }}</option>

                <option value="">All</option>
                
                @foreach ($tourTypeData as $rdRow)

                <option value="{{ $rdRow->short_name }}">{{ $rdRow->full_name }}</option>
                @endforeach
               
        
              </select>
            </div>


<?php $url=url('');?>     
            <div class="button-search" onclick="tourSeachRun('<?php echo $url ;?>') ;">Search</div>
          </div>
 
        </div>
      </div>
    </div>



    <div class="row" id="div-search-result">
      <!-- Recomended item-->


    

      <?php if(count($RecTourData)<=0){

        echo '<div class="col-md-12 align-center title" style="padding:2em !important; font-size:1.5em"><p>  No Result Found </p></div>';

      }
      ?>



      @foreach ($RecTourData as $sRow)
        
      <?php $hash_id= base64_encode($sRow->id);
              if(($sRow->thubnail_img)!=''){ $img_location= url('/').'/'.'images/'.$sRow->id.'/'.$sRow->thubnail_img ;

                  if(!file_exists('images/'.$sRow->id.'/'.$sRow->thubnail_img)){ $img_location= url('/').'/'.'images/no_profile_img.jpg';}

              } else { $img_location= url('/').'/'.'images/no_image.jpg';}


              if(($sRow->large_img)!=''){ $img_location_large= url('/').'/'.'images/'.$sRow->id.'/'.$sRow->large_img ;

                  if(!file_exists('images/'.$sRow->id.'/'.$sRow->large_img)){ $img_location_large= url('/').'/'.'images/no_profile_img.jpg';}

              } else { $img_location_large= url('/').'/'.'images/no_image.jpg';}

?>

      <div class="col-md-6">
        <div class="recom-item border">
          <div class="recom-media"><a href="{{ url('/tour-view')}}/{{ $hash_id }}">
              <div class="pic"><img src="{{ $img_location }}" data-at2x="{{ $img_location_large }}" alt="{{  $sRow->tour_title }}"></div></a>
              <div class="location">{{ $sRow->tour_days_text }}</div>
          </div>
          <!-- Recomended Content-->
          <div class="recom-item-body"><a href="{{ url('/tour-view')}}/{{ $hash_id }}">
              <h6 class="blog-title">{{ $sRow->tour_title }}</h6></a>
            <div class="stars stars-4"></div>
            <div class="recom-price"><span class="font-4">RM {{ $sRow->price }}</span></div>
            <p class="mb-30">{{ $sRow->shot_discription_line }}</p><a href="package_details.php" class="recom-button">Read more</a><a href="{{ url('/tour-view')}}/{{ $hash_id }}" class="cws-button small alt">Book now</a>
            <?php if($sRow->discount_percentage>1) {?><div class="action font-2">{{ $sRow->discount_percentage }}%</div><?php } ?>
          </div>
          <!-- Recomended Image-->
        </div>
      </div>
      <!-- ! Recomended item-->

      @endforeach
      
    </div>
  </div>
     <!-- call out section-->
     <section class="page-section cws_prlx_section bg-white-80 pb-60 pt-60"><img src="{{ asset('assets/pic/parallax-5.jpg') }}" alt class="cws_prlx_layer">
    <div class="container">
      <div class="call-out-box">
        <div class="call-out-wrap alt">
          <h2 class="title-section alt-2 gray">Do you have questions?</h2><a href="{{ url("/")}}/contact" class="cws-button border-left large alt mb-20">Contact us</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ! call out section-->
</div>
<!-- footer-->


@endsection


