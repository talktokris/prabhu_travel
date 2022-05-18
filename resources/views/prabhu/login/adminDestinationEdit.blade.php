@extends('prabhu.login.layouts.master')
@section('title','Home')
@section('contents')


		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tours Destination Settings</li>
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
                                @foreach ($tourEditFills as $fillRow)
                                <form method="POST" action="{{ url('/pb/admin/setting-destination/edit') }}/<?php echo base64_encode($fillRow->id) ;?>">
                                    @csrf
                                  
                                        
                                
                                    <div class="form-group">
                                        <label>Destination Name :</label>
                                        <input id="full_name"  name="full_name" type="text" placeholder="Catagory Name" class="form-control @error('full_name') is-invalid @enderror" value="{{ $fillRow->full_name ?? old('full_name') }}" required autocomplete="off" autofocus>
                                        <input id="id"  name="id" type="hidden"  value="{{ $fillRow->id ?? old('id') }}" >

                                        @error('full_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>Status :</label>
                                        <?php if(($fillRow->status)==1){ $statusText='Active';}
                                        elseif (old('status')==1) { $statusText='Active';}
                                        else {
                                            $statusText='Not Active';
                                        }
                                        ?>
                                            
                                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="{{ $fillRow->status ?? old('status') }}"> {{ $statusText }} </option>
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
                                @endforeach
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
					<button type="button" class="btn  btn-primary pull-right" style="margin-right:20px;">Create New User</button>
					<div class="panel-heading">User List  </div>
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

          if($status == 1){ $statusText = 'Active'; } 
          else { $statusText='Not Active';}
          $homeStaus = $row->home_page_status ; 
          if($homeStaus==1){ $statusHomeText= 'Seen'; } else { $statusHomeText='Not Seen';}

          ?>
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->full_name }}</td>
                <td>{{ $row->short_name }}</td>
                <td>{{ $statusText }} </td>
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