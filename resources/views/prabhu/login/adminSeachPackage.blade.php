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
				<li class="active">Package Search</li>
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


                <!-- card homepage display setting -->

        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12"><h2>Tour Package Seach </h2>   <a href="{{ url("/")}}/pb/admin/package-create" class="btn btn-primary pull-right">Create New Package</a></div>

                <div class="col-lg-6">
                    
                    <div class="panel panel-container" style="padding: 2em;">



                        
                        <form action="" class="form">
                            <div class="form-group">
                             
                        <input class="form-control" id="search_input" name="search_input"  type="text" placeholder=" Search here…" >
                            </div>
                        </form>
                    </div>
                </div>
                
                

               

            </div>
        </div>
        <!-- card area end -->

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
                                    <th>Tour ID</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Status</th>
                                    
                                    <th> Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tourData as $row)
                                    
                            <?php 
                            $status = $row->status ; 

                            if($status==1){ $statusText= '<span class="alert-success">Active</span>'; } else { $statusText='<span class="alert-danger">Not Active</span>';}
                            if(($row->thubnail_img)!=''){ $img_location= url('/').'/'.'images/'.$row->id.'/'.$row->thubnail_img ;

                                    if(!file_exists('images/'.$row->id.'/'.$row->thubnail_img)){ $img_location= url('/').'/'.'images/no_profile_img.jpg';}
                        
                            }
                            
                            else { $img_location= url('/').'/'.'images/no_image.jpg';}
          
                            ?>
                                <tr>
                                    <td> {{  str_pad($row->id, 4, "0", STR_PAD_LEFT);}} <br></td>
                                    <td  style="text-align: center;">{{ $row->tour_title }}<br>
                                    <img src="{{ $img_location }}" class="table-thubnail-img"><br>
                                 
                                    <a href="{{ url("/pb/admin/package/image-upload")}}/<?php echo base64_encode($row->id) ;?>" class="btn btn-info"> Upload Picture </a>
                                    </td>
                                  
                                    <td>{{ $row->shot_discription_line }}</td>
                                    <td>{{ $row->from_destination }}</td>
                                    <td>{{ $row->to_destination }}</td>
                                    <td><?php echo  $statusText ;?> </td>
                                    <td><a href="{{ url("/tour-view")}}/<?php echo base64_encode($row->id) ;?>" target="_blank" class="btn btn-sm btn-success pksr-btn"> View </a><br>
                                    <a href="{{ url("/pb/admin/package/edit/")}}/<?php echo base64_encode($row->id) ;?>" class="btn btn-sm btn-warning pksr-btn"> Edit </a><br>
                                    <a href="{{ url("/pb/admin/package/delete-confirm/")}}/<?php echo base64_encode($row->id) ;?>" class="btn btn-sm btn-danger pksr-btn"> Delete </a></td>
                                
                                
                                </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                           
                                    <th>Tour ID</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Status</th>
                                    <th> Action</th>
                            </tfoot>
                        </table>

	
						
		

						</div>
					</div>
				</div><!-- /.panel-->
				
				
	






				
				</div><!--/.row-->
		</div>
	
		


        @endsection