@extends('prabhu.login.layouts.master')
@section('title','Home')
@section('contents')


		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tours Categories Settings</li>
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
                <div class="col-md-6"><h2> Home Page Active Destinations</h2></div>
                
                


                

                <div class="row col-md-12" style="padding: 2em;">

                    @foreach ($tourTypesActives as $rowA)
                
                    <?php 
                    $status = $rowA->status ; 
                    $id = $rowA->id;
                    $hash_id= base64_encode($id);
          
                    if($status==1){ $statusText= '<div class="alert alert-success">Active</div>'; } else { $statusText='<div class="alert alert-danger">Not Active</div>';}
                    $homeStaus = $rowA->home_page_status ; 
                     $statusActionBtn = '<a href="'.url('/pb/admin').'/'.'home-status-action/'.$hash_id.'" class="btn btn-warning"> Change </a>'; 

                 
          
                    ?>
              

                    <div class="col-xs-6 col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body easypiechart-panel">
                                <h4>{{ $rowA->full_name }}</h4>
                                <img src="{{ url('/') }}/images/destinations/{{ $rowA->thumbnail_img }}" draggable="false"  style="margin-top: 1em; border:1px solid #ccc; width:90%; margin:1em;" >

                          
                            
                             <?php  echo $statusText ;?>
                                <div style="margin: 1em;"><?php echo $statusActionBtn;?></div>
                            </div>
                        </div>
                    </div>

                    @endforeach

           
                </div>

            </div>
        </div>
        <!-- card area end -->

        </div>


		
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-lg-12 text-right " > 	

           
		
			</div>





			<div class="col-lg-12">
				<div class="panel panel-default">
	
					<div class="panel-heading">Destinations List  </div>
					<div class="panel-body">
						<div class="col-md-12">


						<table id="" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Short Name</th>
                                    <th>Active Status</th>
                                    <th>Home Status</th>
                                    <th> Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tourTypes as $row)
                                    
                            <?php 
                            $status = $row->status ; 

                            if($status==1){ $statusText= 'Active'; } else { $statusText='Not Active';}
                            $homeStaus = $row->home_page_status ; 
                            if($homeStaus==1){ $statusHomeText= '<span class="alert-success">Seen</span>'; } else { $statusHomeText='<span class="alert-danger">Not Seen</a>';}
                                if(($row->thumbnail_img)!=''){ $img_location= url('/').'/'.'images/destinations/'.$row->thumbnail_img ;

                                        if(!file_exists('images/destinations/'.$row->thumbnail_img)){ $img_location= url('/').'/'.'images/destinations/no_profile_img.jpg';}

                                }

                                else { $img_location= url('/').'/'.'images/no_image.jpg';}
                            ?>
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td style="text-align: center;">{{ $row->full_name }}  <br>        <img src="{{ $img_location }}" class="table-thubnail-img"><br></td>
                                    <td>{{ $row->short_name }}</td>
                                    <td>{{ $statusText }}</td>
                                    <td><?php echo  $statusHomeText ;?></td>
                                    <td><a href="{{ url("/pb/admin/home-status-action/")}}/<?php echo base64_encode($row->id) ;?>" class="btn btn-sm btn-warning"> Change </a></td>
                                
                                
                                </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Short Name</th>
                                    <th>Active Status</th>
                                    <th>Home Status</th>
                                    <th> Action</th>
                                </tr>
                            </tfoot>
                        </table>

	
						
		

						</div>
					</div>
				</div><!-- /.panel-->
				
				
	






				
				</div><!--/.row-->
		</div>
	
		


        @endsection