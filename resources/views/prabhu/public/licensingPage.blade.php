@extends('prabhu.public.layouts.master')
@section('title','Home')
@section('contents')

  <div class="content-body">



    

      <!-- call out section-->
      <section class="page-section pt-10 pb-0">
        <div class="container"  >

   

          <div class="row col-md-12" > 
 
          <div class="col-md-12" style="text-align:center;">
            <h3 class="title-section"><span> MATTA </span></h2>
              <div class="cws_divider mb-25 mt-5">(Malaysian Association of Tour and Travel Agents)</div>
              <img src="{{ asset('assets/img/licensing/1.jpg') }}"  data-at2x="{{ asset('assets/img/licensing/1.jpg') }}"  class="mt-minus-20"  style="width:70% !important;">
            </div>


            <div class="col-md-12" style="text-align:center;">
            <h3 class="title-section"><span> SSM </span></h2>
              <div class="cws_divider mb-25 mt-5">The Companies Commission of Malaysia ( Malay : Suruhanjaya Syarikat Malaysia, SSM), is a statutory body formed )</div>
              <img src="{{ asset('assets/img/licensing/2.jpg') }}" data-at2x="{{ asset('assets/img/licensing/2.jpg') }}" alt class="mt-minus-20" style="width:70% !important;">
            </div>


            <div class="col-md-12" style="text-align:center;">
            <h3 class="title-section"><span> Ministry of Tourism, Arts and Culture </span></h2>
              <div class="cws_divider mb-25 mt-5">The administers his functions through the Ministry of Tourism, Arts and Culture and a range of other government agencies</div>
              <img src="{{ asset('assets/img/licensing/3.jpg') }}" data-at2x="{{ asset('assets/img/licensing/3.jpg') }}" alt class="mt-minus-20" style="width:70% !important;">
            </div>


            <div class="col-md-12" style="text-align:center;">
            <h3 class="title-section"><span> DBKL License </span></h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <img src="{{ asset('assets/img/licensing/4.jpg') }}" data-at2x="{{ asset('assets/img/licensing/4.jpg') }}" alt class="mt-minus-20" style="width:70% !important;">
            </div>

            <div class="col-md-12" style="text-align:center;">
            <h3 class="title-section"><span> IATA </span></h3>
              <div class="cws_divider mb-25 mt-5">The International Air Transport Association (IATA ) is a of the world's founded in 1945. IATA has been described as a since, in addition to setting technical standards for airlines, IATA also organized conferences that served as a forum for .</div>
              <img src="{{ asset('assets/img/licensing/5.jpg') }}" data-at2x="{{ asset('assets/img/licensing/5.jpg') }}" alt class="mt-minus-20" style="width:70% !important;">
            </div>

   

          </div>
        </div>
      </section>
      <!-- ! call out section-->

      <section class="page-section pt-110 pb-0">
        <div class="container">
          <div class="row"> 
          <h2 class="title-section mt-0 mb-0">Member of </h2>
              <!-- ! section title-->
              <div class="cws_divider with-plus short-3 mb-20 mt-10"></div>
            <div class="col-md-6"  style="text-align:center;">
            <img src="{{ asset('assets/img/licensing/sabre.jpg') }}" data-at2x="{{ asset('assets/img/licensing/sabre.jpg') }}" alt class="mt-minus-20" style="width:70% !important;">
            <p class="mb-20">Sabre Global Distribution System, owned by Sabre Corporation, is used by travel agents and companies around the world to search, price, book, and ticket travel services provided by airlines, Sabre aggregates airlines, hotels, online and offline travel agents and travel buyers.</p>
             
               
            </div>
            <div class="col-md-6" style="text-align:center;" >
            <img src="{{ asset('assets/img/licensing/travel-port.jpg') }}" data-at2x="{{ asset('assets/img/licensing/travel-port.jpg') }}" alt class="mt-minus-20" style="width:70% !important;" >
            <p class="mb-20">Travelport Worldwide Ltd provides distribution, technology, payment solutions for the and industry. Founded in 2002, Revenue made US$2.5 billion in 2018.</p>
             
              
            </div>
         
          </div>
        </div>
      </section>


@endsection