@extends('prabhu.login.layouts.master')
@section('title','Home')
@section('contents')



@push('styles')
    <link href="{{ asset("bk/assets/css/custom.css") }}" rel="stylesheet">
@endpush


		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Recent Bookings</li>
			</ol>
		</div><!--/.row-->

        <div class="row">
            <div class="col-lg-12 text-center" style="padding-top:1em;" > 

                
                
                
                @if(Session::has('flash_message_success'))

                    <div class="alert alert-success" role="alert">
                        {!! session('flash_message_success') !!}
                    </div>
                    
                @endif

                @if(Session::has('flash_message_error'))

                <div class="alert alert-danger" role="alert">
                    {!! session('flash_message_error') !!}
                </div>
                         
                @endif
        
            </div>
        </div>

		


		<div class="row">



        </div>


		
		
		<div class="panel panel-container">
			<div class="row">






			<div class="col-lg-12">
				<div class="panel panel-default">
	
			
					<div class="panel-body">
						<div class="col-md-12">
                        
                    
               


						<table id="package_search" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                   
                                    <th>Personal Info </th>
                               
                               
                                    <th>Email</th>
                                    <th>Booking Date</th>
                                    <th>Create Date</th>
                                
                                    
                                    <th>View Tour</th>
                                
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($recentData as $row)
                                    
                  
                                <tr>
                                    <td style="text-align: center;"> {{  str_pad($row->id, 4, "0", STR_PAD_LEFT);}}</td>
                                    <td  style="text-align: right;">  <span style="color: orange; float:left;">Name :  </span> {{ $row->name }}<br><hr>
                                        <span style="color: orange; float:left;">Nationality :  </span>   {{ $row->nationality }}<br><hr>
                                        <span style="color: orange; float:left;">Sex :  </span> {{ $row->gender }}<br><hr>
                                        <span style="color: orange; float:left;">Phone :  </span>   {{ $row->phone }}<br>
                                     
                                      </td>
                                  
                                    <td style="text-align: right;">{{ $row->email }}</td>
                              
                                  
                                    <td>{{ $row->booking_date }} </td>
                                    <td>{{ $row->created_at->diffForHumans() }} </td>
                                    <td><a href="{{ url("/tour-view")}}/<?php echo base64_encode($row->tour_id) ;?>" target="_blank" class="btn btn-sm btn-success pksr-btn"> View </a><br>
                                 
                                
                                </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                           
                                    <th>Booking ID</th>
                                   
                                    <th>Personal Info </th>
                               
                               
                                    <th>Email</th>
                                    <th>Booking Date</th>
                                
                                    <th>Create Date</th>
                                    <th>View Tour</th>
                            </tfoot>
                        </table>

	
						
		

						</div>
					</div>
				</div><!-- /.panel-->
				
				
	






				
				</div><!--/.row-->
		</div>
	
		


        @endsection