@extends('prabhu.public.layouts.master')
@section('title','Home')
@section('contents')

<div class="content-body">



    
  <!-- page services-->
  <section class="page-section cws_prlx_section pb-100 bg-gray-60"><img src="{{ asset('assets/pic/parallax-5.jpg') }}" alt class="cws_prlx_layer">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="title-section alt"><span>Our</span> Services</h2>
          <div class="cws_divider mb-25 mt-5"></div>
          </div>
      </div>
      <div class="row">

             <!-- service item-->
        <div class="col-md-4 col-sm-6 mb-40">
          <div class="service-item icon-center color-icon border"><i class="fa fa-plane cws-icon type-1 color-2"></i>
            <h3>Flight Ticket</h3>
            <p class="mb-0">We provide Lowest Fair for Fair Ticket to Nepal, Bangladesh, Myanmar, India and Pakistan. We are the Strong Partner with of Nepal Air, Himalaya Air. </p>
          </div>
        </div>
        <!-- service item-->
        <!-- service item-->
        <div class="col-md-4 col-sm-6 mb-40">
          <div class="service-item icon-center color-icon border"><i class="fa fa-bullhorn cws-icon type-1 color-2"></i>
            <h3>Counselling Services</h3>
            <p class="mb-0">If there is a communication barrier between management and worker, we will interpret and try to solve the misconception. </p>
          </div>
        </div>
        <!-- service item-->
        <!-- ! service item-->
        <div class="col-md-4 col-sm-6 mb-40">
          <div class="service-item icon-center color-icon border"><i class="fa fa-taxi cws-icon type-1 color-2"></i>
            <h3>Travel Management</h3>
            <p class="mb-0">Worker who finished his contract, we provide all service factory to his home country, like Transport to Airport, Flight Ticket, Hotel, Stopover to Souvenir shop. </p>
          </div>
        </div>
        <!-- service item-->
        <!-- ! service item-->
        <div class="col-md-4 col-sm-6 mb-40">
          <div class="service-item icon-center color-icon border"><i class="fa fa-smile-o cws-icon type-1 color-2"></i>
            <h3>Team Building Activity</h3>
            <p class="mb-0">We provide team-building activities in their Native Language which makes work more efficient active and productive.</p>
          </div>
        </div>
        <!-- ! service item-->
        <!-- service item-->
        <div class="col-md-4 col-sm-6 mb-40">
          <div class="service-item icon-center color-icon border"><i class="flaticon-suntour-car cws-icon type-1 color-2"></i>
            <h3>Transportation</h3>
            <p class="mb-0">We provide Van and Bus to receive and send worker factory’s to Airport.  </p>
          </div>
        </div>
        <!-- service item-->
        <!-- ! service item-->
        <div class="col-md-4 col-sm-6 mb-40">
          <div class="service-item icon-center color-icon border"><i class="flaticon-suntour-ship cws-icon type-1 color-2"></i>
            <h3>Cargo Services</h3>
            <p class="mb-0">We provide excess baggage cargo shipping and airfreight. </p>
          </div>
        </div>
        <!-- service item-->

      </div>
    </div>
  </section>
  <!-- ! page services-->
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



@endsection