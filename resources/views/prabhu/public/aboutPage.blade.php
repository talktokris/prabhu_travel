@extends('prabhu.public.layouts.master')
@section('title','Home')
@section('contents')

<div class="content-body">
  <!-- page section about-->
  <section class="small-section cws_prlx_section bg-white-80 pb-0"><img src="{{ asset('assets/pic/parallax-4.jpg') }}" alt class="cws_prlx_layer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-md-60">
          <!-- section title-->
          <h2 class="title-section-top alt gray">About</h2>
          <h2 class="title-section alt gray font-bold"><span>Prabhu </span> Travel</h2>
          <!-- ! section title-->
          <p class="mb-30">PRABHU TRAVELS is licensed with the Ministry of Tourism of Malaysia and authorized to organize tours, Flight and Travel Management in Malaysia Also Member of MATTA (Malaysian Association of Tour & Travel Agents) & of IATA, we are located at No 4, 1st Floor Jalan Medan Pasar 50050 Kuala Lumpur Malaysia since 2014.
           </p>
          <div class="cws_divider short mb-30"></div>
         
        </div>
        <div class="col-md-6 flex-item-end"><img src="{{ asset('assets/img/about_prabhu_travel-3.png') }}" alt="prabhu-travels-team"></div>
      </div>
    </div>
  </section>
  <!-- ! page section about-->
  <!-- section parallax counter-->
  <section class="small-section">
    <div class="container">
      <div class="row">
        <!-- counter blocks-->
        <div class="col-md-6">
          <div class="row">
            <div class="col-xs-6 mt-20 mb-20">
              <div class="service-item icon-right color-icon"><i class="fa fa-arrow-circle-right cws-icon type-1 color-2"></i>
                <h3>Exclusive Hospitality</h3>
                <p class="mb-0">Prabhu travel provides exclusive hospitality to its valuable guest </p>
             </div>
            </div>

            <div class="col-xs-6 mt-20 mb-20">
              <div class="service-item icon-right color-icon"><i class="fa fa-arrow-circle-right cws-icon type-1 color-2"></i>
                <h3>Best Delivery</h3>
                <p class="mb-0">We offer best tours, airport pickup and drop off services  </p>
             </div>
            </div>


            <div class="col-xs-6 mt-20 mb-20">
              <div class="service-item icon-right color-icon"><i class="fa fa-arrow-circle-right cws-icon type-1 color-2"></i>
                <h3>Luxury Packages</h3>
                <p class="mb-0">Enjoy our premium and luxury tour packages </p>
             </div>
            </div>


            <div class="col-xs-6 mt-20 mb-20">
              <div class="service-item icon-right color-icon"><i class="fa fa-arrow-circle-right cws-icon type-1 color-2"></i>
                <h3>Dedicated Professionals</h3>
                <p class="mb-0">We have very loyal and dedicated professionals to provide best comfortable services  </p>
            </div>
            </div>

            <div class="col-xs-6 mt-20 mb-20">
              <div class="service-item icon-right color-icon"><i class="fa fa-arrow-circle-right cws-icon type-1 color-2"></i>
                <h3>Safety Concern</h3>
                <p class="mb-0">Travel safety is the first concern to all our customers  </p>
             </div>
            </div>

            <div class="col-xs-6 mt-20 mb-20">
              <div class="service-item icon-right color-icon"><i class="fa fa-arrow-circle-right cws-icon type-1 color-2"></i>
                <h3>Value Of Time & Price</h3>
                <p class="mb-0">We have cost effective packages which will save your time and money </p>
            </div>
            </div>



          </div>
        </div>
        <!-- ! counter blocks-->
        <!-- tabs-->
        <div class="col-md-6 mt-md-40">
          <div class="tabs">
            <div class="block-tabs-btn clearfix">
              <div data-tabs-id="tabs1" class="tabs-btn active">Message from Chairman</div>
              <div data-tabs-id="tabs2" class="tabs-btn">Our mission</div>
              <div data-tabs-id="tabs3" class="tabs-btn">About us</div>
            </div>
            <!-- tabs keeper-->
            <div class="tabs-keeper">
              <!-- tabs container-->
              <div data-tabs-id="cont-tabs1" class="container-tabs active">

              <h6 class="trans-uppercase">GREETINGS FROM PRABHU TRAVELS SDN BHD!</h6>
                <p style="text-align:justify;">The global pandemic brought the entire world to a complete standstill. The Tourism Industry is facing unprecedented times with the outbreak of COVID-19 as it has imposed a massive burden on the industry. It has disturbed the industry’s ecosystem unlike prior recessions that includes the 1991 savings and loan crisis, the dot-com bust aggravated by the 9/11 attack, or the financial crisis of 2008. The crisis triggered in the tourism economy due to the pandemic has left the industry immensely shocked like no other event in history before. The Organization for Economic Co-operation and Development (OECD) has estimated international tourism to decline by 60% in 2020. This impact could further worsen to 80% if the recovery from the pandemic is delayed until December. COVID-19 has placed 100 to 120 million direct tourism jobs at risk and paradoxically, potential repercussions and alternative solutions are yet volatile.

We are located where easy excess of foreign worker. Prabhu Travel is a labour-based travel agent, we can communicate in the language of diverse foreign workers. We can get seats on the flight, special baggage allowance & competitive labour fare, Due to the long-established excellent partnership with airlines.

</p>
<p style="text-align: center;"><img src="{{ asset('assets/img/chairman-message.jpg') }}" style="width:40%; " alt="prabhu-travels-team"></p>

               
              </div>
              <!-- /tabs container-->
              <!-- tabs container-->
              <div data-tabs-id="cont-tabs2" class="container-tabs">
                <h6 class="trans-uppercase">Mission of Prabhu Travels</h6>
                <p>Our Mission is to perform and deliver excellent quality service to our clients. Providing them unforgettable travel, enjoyable, with guaranteed services that exceed their expectations with this objective, our aim to achieve the reputation as "Your Preferred Travel Agency".  </p>
        
              </div>
              <!-- /tabs container-->
              <!-- tabs container-->
              <div data-tabs-id="cont-tabs3" class="container-tabs">
              <h6 class="trans-uppercase">About Prabhu Travels</h6>
                <p>PRABHU TRAVELS is licensed with the Ministry of Tourism of Malaysia and authorized to organize tours, Flight and Travel Management in Malaysia Also Member of MATTA (Malaysian Association of Tour & Travel Agents) & of IATA, we are located at No 4, 1st Floor Jalan Medan Pasar 50050 Kuala Lumpur Malaysia since 2014.
            Prabhu Travel work as a labour-based travel agent, we are able communicate in the language of diverse foreign workers. We can arrange seats on the flight, special baggage allowance & competitive labour fare, as we maintain the long-established excellent partnership with airlines.  </p>
       

         
              </div>
              <!-- /tabs container-->
            </div>
            <!-- /tabs keeper-->
          </div>
        </div>
        <!-- /tabs-->
      </div>
    </div>
  </section>
  <!-- ! section parallax counter-->


  <!-- ! team section -->
  <!-- call out section-->
  <section class="page-section cws_prlx_section bg-white-80 pb-60 pt-60"><img src="{{ asset('assets/pic/parallax-5.jpg') }}" alt class="cws_prlx_layer">
    <div class="container">
      <div class="call-out-box">
        <div class="call-out-wrap alt">
          <h2 class="title-section alt-2 gray">Do you have questions?</h2><a href="{{ url("/") }}/contact" class="cws-button border-left large alt mb-20">Contact us</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ! call out section-->
</div>

@endsection