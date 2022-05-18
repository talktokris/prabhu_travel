@extends('prabhu.public.layouts.master')
@section('title','Home')
@section('contents')

<div class="content-body">


    <div class="content-body">
        <section class="page-section pt-0 pb-50">
       
          <div class="container">
  
          <div class="row" style="text-align: center;">
            


          <div class="col-md-12 mt-40" style="padding: 1em; text-align:center;">

            <div role="alert" class="alert alert-success alert-dismissible fade in mb-20">
               <h2 style="color: #fff;"><i class="alert-icon flaticon-suntour-check"></i>  Congratulation !</h2>
               <h4> Your booking has proceeded successfully. We will be updated you as soon as possible.</h4>
                
               <h5> Here is your booking reference ID:  PB<?php echo str_pad($book_id, 3,'0', STR_PAD_LEFT);?> </h5>
                
              </div>
  
        
  
  
          </div>
  
  
          
       
      
  
          </div>
  
  
  
          </div>
  
  
  
  
      
          </div>
  
        </section>
      </div>
      <!-- footer-->



  @endsection