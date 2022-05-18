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

            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">Create New Tour Destinations</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form method="POST" action="{{ url('pb/admin/setting-destination') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tour Destination Name :</label>
                                        <input id="full_name"  name="full_name" type="text" placeholder="Destination Name" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name') }}" required autocomplete="off" autofocus>

                                        @error('full_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>Status :</label>
                                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="1">Active</option>
                                            <option value="0">Not Active</option>

                                        </select>

                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary pull-right" value="Save">
                                    </div>
                            
                                    
                                </form>
                            </div>
                            
                        
                        </div>
                    
                </div>

            
            </div>
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
                <th>Active Staus</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($tourTypes as $row)
                
          <?php 
          $status = $row->status ; 

          if($status==1){ $statusText= 'Active'; } else { $statusText='Not Active';}
          $homeStaus = $row->home_page_status ; 
          if($homeStaus==1){ $statusHomeText= 'Seen'; } else { $statusHomeText='Not Seen';}

          if(($row->thumbnail_img)!=''){ $img_location= url('/').'/'.'images/destinations/'.$row->thumbnail_img ;

                 if(!file_exists('images/destinations/'.$row->thumbnail_img)){ $img_location= url('/').'/'.'images/destinations/no_profile_img.jpg';}

            }

            else { $img_location= url('/').'/'.'images/destinations/no_image.jpg';}

          ?>
            <tr>
                <td>{{ $row->id }}</td>
                <td style="text-align: center;">{{ $row->full_name }}<br>
                    <img src="{{ $img_location }}" class="table-thubnail-img"><br>
                    <a href="{{ url("/pb/admin/destination/image-upload")}}/<?php echo base64_encode($row->id) ;?>" class="btn btn-info"> Change Picture </a>
                </td>
                <td>{{ $row->short_name }}</td>
                <td>{{ $statusText }}</td>
                <td><a href="{{ url("/pb/admin/setting-destination/edit")}}/<?php echo base64_encode($row->id) ;?>" class="btn btn-sm btn-warning"> Edit </a></td>
                <td><a href="{{ url("/pb/admin/setting-destination/delete")}}/<?php echo base64_encode($row->id) ;?>" class="btn btn-sm btn-danger"> Delete </a></td>
             
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Short Name</th>
                <th>Active Staus</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>

	
						
		

						</div>
					</div>
				</div><!-- /.panel-->
				
				
	






				
				</div><!--/.row-->
		</div>
	
		


        @endsection