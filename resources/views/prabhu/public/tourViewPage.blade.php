@extends('prabhu.public.layouts.master')
@section('title','Home')
@section('contents')

<div class="content-body">


    <div class="content-body">
        <section class="page-section pt-0 pb-50">
       
          <div class="container">
  
          <div class="row">


          <div class="col-md-8 mt-40">
  
          <div id="flex-slider" class="flexslider">
              <ul class="slides">

                @foreach ($tourImageData as $iRow)

                <?php 

                $viewId= $tourDetails[0]->id;

                    if(($iRow->large_img)!=''){ $img_location_large= url('/').'/'.'images/'.$viewId.'/'.$iRow->large_img ;

                        if(!file_exists('images/'.$viewId.'/'.$iRow->large_img)){ $img_location_large= url('/').'/'.'images/no_profile_img.jpg';}

                    } else { $img_location_large= url('/').'/'.'images/no_image.jpg';}


                  ?>
                    

                <li><img src="{{ $img_location_large }}" alt></li>

                @endforeach

                @if (count($tourImageData) < 1)
                    <li><img src="{{ url('/').'/'.'images/no_image.jpg' }}" alt></li>

                @endif
               
               <?php /* <li><img src="{{ asset('assets/pic/flexslider/l-3.jpg') }}" alt></li>
                <li><img src="{{ asset('assets/pic/flexslider/l-4.jpg') }}" alt></li>
                <li><img src="{{ asset('assets/pic/flexslider/l-5.jpg') }}" alt></li>
                <li><img src="{{ asset('assets/pic/flexslider/l-6.jpg') }}" alt></li>
                <li><img src="{{ asset('assets/pic/flexslider/l-7.jpg') }}" alt></li>
                <li><img src="{{ asset('assets/pic/flexslider/l-8.jpg') }}" alt></li>
                <li><img src="{{ asset('assets/pic/flexslider/l-9.jpg') }}" alt></li>
                <li><img src="{{ asset('assets/pic/flexslider/l-1.jpg') }}" alt></li>

                */ ?>
              </ul>
            </div>
            <div id="flex-carousel" class="flexslider">
              <ul class="slides">

               
                @foreach ($tourImageData as $iRow)

                <?php 

                $viewId= $tourDetails[0]->id;

                    if(($iRow->large_img)!=''){ $img_location_large= url('/').'/'.'images/'.$viewId.'/'.$iRow->large_img ;

                        if(!file_exists('images/'.$viewId.'/'.$iRow->large_img)){ $img_location_large= url('/').'/'.'images/no_profile_img.jpg';}

                    } else { $img_location_large= url('/').'/'.'images/no_image.jpg';}


                  ?>
                    
               
       
            
              <li><img src="{{ $img_location_large }}" data-at2x="{{ $img_location_large }}" alt> </li>
              
              @endforeach


  

              @if (count($tourImageData) < 1)
             
                <li> <img src="{{ url('/').'/'.'images/no_image.jpg' }}" data-at2x="{{ url('/').'/'.'images/no_image.jpg' }}" alt></li>
              @endif
           
            
              </ul>
            </div>
  
  
              <div class="col-md-12 mt-30">
              <h4 class="trans-uppercase mb-10">Tour Informations</h4>
                  <div class="cws_divider"></div>

                  <?php echo $tourDetails[0]->tour_information ?>
          </div>
  
              <div class="col-md-8">
                <h4 class="trans-uppercase mb-10">Tour Details</h4>
                  <div class="cws_divider mb-10"></div>
  
  
                      <div class="col-md-6 col-sm-6">
                          <h6 class="trans-uppercase">General</h6>

                          <?php echo $tourDetails[0]->tour_details ?>
                         
                      </div>
              </div>
        
  
  
          </div>
  
  
          
          <div class="col-md-4 mt-40">
          <aside class="sb-right pb-50-imp">
               
                <!-- widget category-->
                <div class="cws-widget">
                  <div class="widget-top-sellers">
                    
                    <h6 style="margin:2em 2em 1em 2em;">{{ $tourDetails[0]->tour_title}}</h6>
                    <div class="cws_divider mb-25 mt-5"></div>

                    <?php $price =$tourDetails[0]->price ;  $disPer =$tourDetails[0]->discount_percentage ;

                    if($disPer>0){ $discountAmount = $price * $disPer / 100 ;
                                    $currentPrice = round($price - $discountAmount, 2);
                       } else { $currentPrice= $price ;}

                    ?>
                   
                    <table class="table table-responsive table-price">
                        <tr> <td class="lpb"> From  </td> <td> {{ $tourDetails[0]->from_destination}}</td></tr>
                        <tr> <td class="lpb"> To om </td> <td> {{ $tourDetails[0]->to_destination }} </td></tr>
                        <tr> <td class="lpb"> Tour ID </td> <td>  PT<?php echo str_pad($tourDetails[0]->id,'3', '0', STR_PAD_LEFT); ?></td></tr>
                        <tr> <td class="lpb"> Age Range </td> <td> {{ $tourDetails[0]->age_range}}</td></tr>
                        <tr> <td class="lpb"> Operated In </td> <td> {{ $tourDetails[0]->operated_in}}</td></tr>
                        <tr> <td class="lpb"> Price </td> <td> <span class="lpbc"> RM {{ $currentPrice }} </span><?php  if($disPer>0){?>  <span class="lpbn">  RM {{ $tourDetails[0]->price }} </span><?php } ?></td></tr>
  
                    </table>
         
           
                  </div>
  
  
                  <div class="widget-categories">
  
  
                  
                   
                    <h6 style="margin:2em 2em 1em 2em;"><span>Booking </span> Informations</h6>
                    <div class="cws_divider mb-25 mt-5"></div>
  
  
                    
                  <form style="margin:1em;" method="POST" action="{{ url('/tour-view') }}/{{ $hash_id }}" >
                    @csrf 
  
                  <div class="form-group row" >
                      <label for="staticEmail" class="col-sm-4 col-form-label">Name  <span style="color:red;">*</span></label>
                      <div class="col-sm-8">
                        <input id="name"  name="name" type="text"  class="form-group form-control-plaintext kfw @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter Full Name" autocomplete="off" autofocus>
                      
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-4 col-form-label">Email   <span style="color:red;">*</span></label>
                      <div class="col-sm-8">
                     
                      <input id="email"  name="email" type="text"  class="form-group form-control-plaintext kfw @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address" autocomplete="off" autofocus>
                      
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                  </div>
  
  
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-4 col-form-label">Nationality  <span style="color:red;">*</span></label>
                      <div class="col-sm-8">
                       
                            <select name="nationality" id="nationality" class="form-control form-control-plaintext kfw  @error('nationality') is-invalid @enderror">
                                <option value="{{ old('nationality')  }}">{{ old('nationality')  ?? 'Select' }}</option>
                              @foreach ($countryAllData as $cRow)

                              <option value="{{ $cRow->Country_Name}}">{{ $cRow->Country_Name }}</option>
                                  
                              @endforeach

                          </select> 

                          @error('nationality')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                        @enderror
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-4 col-form-label">Gender  <span style="color:red;">*</span></label>
                      <div class="col-sm-8">
                         

                            <select name="gender" id="gender" class="form-control form-control-plaintext kfw  @error('gender') is-invalid @enderror">
                                             
                                                  
                                <option value="{{ old('gender')  }}">{{ old('gender')  }}</option>
                            
                              <option>Male</option>
                              <option>Female</option>
                             
                          </select> 

                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-4 col-form-label">Phone  <span style="color:red;">*</span></label>
                      <div class="col-sm-8">
                      
                      <input id="phone"  name="phone" type="text"  class="form-group form-control-plaintext kfw @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="123456673" autocomplete="off" autofocus>
                      
                      @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-4 col-form-label"> Date  <span style="color:red;">*</span></label>
                      <div class="col-sm-8">
    
                      <input id="datetimepicker1"  name="date" type="text"  class="form-group form-control-plaintext kfw @error('date') is-invalid @enderror" value="{{ old('date') }}" placeholder="YYYY-MM-DD" autocomplete="off" autofocus>
                      
                      @error('date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                  </div>
  
                  <div class="form-group row">
                      <label for="staticEmail" class="col-sm-4 col-form-label">Tour ID <span style="color:red;">*</span></label>
                      <div class="col-sm-8">
                      

                      <input id="tour_id"  name="tour_id" type="text"  class="form-group form-control-plaintext kfw @error('tour_id') is-invalid @enderror" value="PT<?php echo str_pad($tourDetails[0]->id,'3', '0', STR_PAD_LEFT); ?>" autocomplete="off" readonly>
                      <input  name="id" id="id" type="hidden" value="<?php echo $tourDetails[0]->id ;?>">
                      @error('tour_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                  </div>
  
                  
  
  
                  <?php /*
         
  
                      <div class="form-group" class="form search divider-skew">
                          <label for="exampleInputEmail1">Name </label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">
                      </div>
  
                      <div class="form-group" class="form search divider-skew">
                          <label for="exampleInputEmail1">Nationality </label>
                          <select class="form-control">
                              <option>Select</option>
                              <option>Malaysia</option>
                              <option>Nepal</option>
                              <option>India</option>
                          </select>
                      </div>
  
                      <div class="form-group" class="form search divider-skew">
                          <label for="exampleInputEmail1">Gender </label>
                          <select class="form-control">
                              <option>Select</option>
                              <option>Male</option>
                              <option>Female</option>
                          </select>
                      </div>
  
                      <div class="form-group" class="form search divider-skew">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Phone</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Tour Date</label>
                         <div class="tours-calendar divider-skew"> 
                          <input placeholder="Select date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control calendar-default textbox-n">
                         </div>
                      </div>
  
                      <div class="form-group">
                          <label for="exampleInputPassword1">Tour ID</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tour ID">
                      </div>
  
                      */?>
                      <div class="form-group" style="text-align:right;" >
               
                      <button type="submit" class="cws-button border-left large alt mt-20" >Confirm Booking</button>
                      </div>
                  </form>
                  </div>
                </div>
                <!-- ! widget category-->
           
  
      
              </aside>
             
                
          </div>
      
  
          </div>
  
  
  
          </div>
  
  
  
  
      
          </div>
  
        </section>
      </div>
      <!-- footer-->



  @endsection