@extends('prabhu.public.layouts.master')
@section('title','Home')
@section('contents')

<div class="content-body">
  <div class="container">
    <div class="row mt-30">
      <div class="col-md-6">
        <div class="contact-item">
          <h4 class="title-section mt-30"><span class="font-bold">Contacts</span></h4>
          <div class="cws_divider mb-25 mt-5"></div>
          <ul class="icon">
            <li class="pt-20"><h2>PRABHU TRAVELS SDN BHD</h2></li>
            <li class="pt-20"> <a href="mailto:enquiry@prabhutravel.com"> support@prabhutravel.com <i class="flaticon-suntour-email"></i></a> / <a href="mailto:prabhutravel.kul@gmail.com"> prabhutravel.kul@gmail.com <i class="flaticon-suntour-email"></i></a></li>

         
            <li class="pt-20"> <a href="call:+603 2022 0124">+603 2022 0124 <i class="flaticon-suntour-phone"></i></a> / <a href="call:+603 2303 0124">+603 2303 0124<i class="flaticon-suntour-phone"></i></a></li>
            <li class="pt-20"> <a href="#"><i class="flaticon-suntour-map"></i>No 4, 1st Floor, Medan Pasar 50050<br> Kuala Lumpur, Malaysia.</a></li>
          </ul>
          <?php /* <p class="mt-20">Guests can enjoy a range of massage treatments and beauty therapy at the on-site spa, U Spa. It offers child-minding services, a currency exchange and a reception that is available 24/7. It also has superb facilities for meetings and events. </p> */?>
          <div class="contact-cws-social"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15935.215260500645!2d101.68691208511959!3d3.146412039188943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c494644a764c111!2sPRABHU%20TRAVEL%20SDN%20BHD!5e0!3m2!1sen!2snp!4v1647681788498!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
      </div>
    </div>
  </div>
  </div>
  <div class="element-section pattern bg-gray-3 relative pt-60 pb-100">
    <div class="container">
      <h4 class="title-section mb-20"><span class="font-bold">Contact us</span></h4>
      <div class="widget-contact-form pb-0">
        <!-- contact-form-->
        <div class="email_server_responce"></div>
        <form action="php/contacts-process.php" method="post" class="form contact-form alt clearfix">
          <div class="row">
            <div class="col-md-6 clearfix">
              <div class="input-container">
                <input type="text" name="name" value="" size="40" placeholder="Name" aria-invalid="false" aria-required="true" class="form-row form-row-first">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-container">
                <input type="text" name="email" value="" size="40" placeholder="Email" aria-required="true" class="form-row form-row-last">
              </div>
            </div>
          </div>
          <div class="input-container">
            <textarea name="message" cols="40" rows="4" placeholder="Comment" aria-invalid="false" aria-required="true"></textarea>
          </div>
          <input type="submit" value="Submit now" class="cws-button alt">
        </form>
        <!-- /contact-form-->
      </div>
    </div>
  </div>
</div>


@endsection