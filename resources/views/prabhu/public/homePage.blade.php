@extends('prabhu.public.layouts.master')
@section('title','Home')
@section('contents')

<div class="content-body">
  <div class="tp-banner-container">
    <div class="tp-banner-slider">
      <ul>
        <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="{{ asset('assets/pic/slider/main/slide-1.jpg') }}" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
          <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
            <div class="sl-title-top">Beautiful   </div>
            <div class="sl-title">Sunset</div>
            <div class="sl-title-bot">with your Loved one</div>
          </div>
        </li>
        <li data-masterspeed="700" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="{{ asset('assets/pic/slider/main/slide-2.jpg') }}" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
          <div data-x="['center','center','center','center']" data-y="center" data-transform_in="y:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
            <div class="sl-title-top"> Explore    </div>
            <div class="sl-title" >KLCC </div>
            <div class="sl-title-bot">shopping mall</div>
          </div>
        </li>
        <li data-masterspeed="700" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="{{ asset('assets/pic/slider/main/slide-3.jpg') }}" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
          <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
            <div class="sl-title-top">Isolated</div>
            <div class="sl-title">Island   </div>
            <div class="sl-title-bot">for your relaxation</div>
          </div>
        </li>

        <li data-masterspeed="700" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="{{ asset('assets/pic/slider/main/slide-4.jpg') }}" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
          <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
            <div class="sl-title-top">Luxurious</div>
            <div class="sl-title">Hotels   </div>
            <div class="sl-title-bot"> close to nature</div>
          </div>
        </li>
      </ul>
    </div>
    <!-- slider info-->

    <!-- ! slider-info-->
  </div>
  <!-- page section-->
  <section class="page-section pb-0" style="padding: 20px 0 ;">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h6 class="title-section-top font-4"> Most visited</h6>
          <h2 class="title-section"><span>Popular</span> Destinations</h2>
          <div class="cws_divider mb-25 mt-5"></div>
    </div>

      </div>
    </div>
    <div class="features-tours-full-width">
      <div class="features-tours-wrap clearfix">

        <?php // dd($destinationData);?>
        @foreach ($destinationData as $row_rec)

      <a href="package_details/{{ $row_rec->short_name }}" class="button">
        <div class="features-tours-item">
          <div class="features-media"><img src="{{ asset('images/destinations') }}/{{ $row_rec->thumbnail_img }}" data-at2x=" {{ asset('images/destinations') }}/{{ $row_rec->thumbnail_img }}" alt="{{ $row_rec->full_name }}">
            <div class="features-info-bot">   <h4 class="title">{{ $row_rec->full_name }}</h4> </div>
          </div>
        </div>
        </a>

       @endforeach
          
  

      </div>
    </div>
  </section>
  <!-- ! page section-->
  
  <!-- recomended section-->
  <section class="small-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h6 class="title-section-top font-4">Top rated</h6>
          <h2 class="title-section"><span>Recomended</span> Tours</h2>
          <div class="cws_divider mb-25 mt-5"></div>
       </div>
        <div class="col-md-4"><i class="flaticon-suntour-hotel title-icon"></i></div>
      </div>
      <div class="row">

    


        @foreach ($RecTourData as $tourRow )

        <?php $hash_id= base64_encode($tourRow->id);
        
        if(($tourRow->thubnail_img)!=''){ $img_location= url('/').'/'.'images/'.$tourRow->id.'/'.$tourRow->thubnail_img ;

              if(!file_exists('images/'.$tourRow->id.'/'.$tourRow->thubnail_img)){ $img_location= url('/').'/'.'images/no_profile_img.jpg';}

        } else { $img_location= url('/').'/'.'images/no_image.jpg';}


        if(($tourRow->large_img)!=''){ $img_location_large= url('/').'/'.'images/'.$tourRow->id.'/'.$tourRow->large_img ;

              if(!file_exists('images/'.$tourRow->id.'/'.$tourRow->large_img)){ $img_location_large= url('/').'/'.'images/no_profile_img.jpg';}

        } else { $img_location_large= url('/').'/'.'images/no_image.jpg';}


?>

        <!-- Recomended item-->
        <div class="col-md-6">
          <div class="recom-item">
            <div class="recom-media"><a href="{{ url('/tour-view')}}/{{ $hash_id }}">
                <div class="pic"><img src="{{ $img_location }}" data-at2x="{{ $img_location_large }}" alt="{{ $tourRow->tour_title}}"></div></a>
                <div class="location">{{ $tourRow->tour_days_text}}</div>
            </div>
            <!-- Recomended Content-->
            <div class="recom-item-body"><a href="{{ url('/tour-view')}}/{{ $hash_id }}">
                <h6 class="blog-title">{{ $tourRow->tour_title}}</h6></a>
              <div class="stars stars-3"></div>
              <div class="recom-price"><span class="font-4">RM {{ $tourRow->price}}</span></div>
              <p class="mb-30">{{ $tourRow->shot_discription_line}}</p><a href="{{ url('/tour-view')}}/{{ $hash_id }}" class="recom-button">Read more</a><a href="{{ url('/tour-view')}}/{{ $hash_id }}" class="cws-button small alt">Book now</a>
              <?php if($tourRow->discount_percentage>1) {?><div class="action font-2">{{ $tourRow->discount_percentage }}%</div><?php } ?>
            </div>
            <!-- Recomended Image-->
          </div>
        </div>
        <!-- ! Recomended item-->

        @endforeach
        

      </div>
    </div>
  </section>
  <!-- ! recomended section-->



  <!-- call out section-->
  <section class="page-section cws_prlx_section bg-white-80 pb-60 pt-60" id="cws_prlx_section_447662992538"><img src="{{ asset('assets/pic/parallax-5.jpg') }}" alt="" class="cws_prlx_layer" id="cws_prlx_layer_894961029381" style="transform: translate(-50%, -241.28px);">
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


@endsection