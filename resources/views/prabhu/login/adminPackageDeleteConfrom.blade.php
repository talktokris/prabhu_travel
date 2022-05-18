@extends('prabhu.login.layouts.master')
@section('title','Home')
@section('contents')


		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Delete Package</li>
			</ol>
		</div><!--/.row-->

        <div class="row">


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

            <div class="col-lg-6">

                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;">Delete Confirmation</div>
                        <div class="panel-body">
       
                           <form method="POST" action="{{ url('pb/admin/package/edit') }}/<?php echo $hash_id;?>">
                                    @csrf 


                         
                                     
                                
                                    
                            <div class="col-md-12">

                                <div class="alert alert-danger" style="padding: 2em;">   <h4 style="color: red; text-align:center;"> Are you sure you what to delete this package?</h4>
                                
                                <div class="row" style="margin-top: 3em;">
                                    <div class="col-sm-6" style="text-align: center;"><a href="{{ url("/pb/admin/package-search") }}" class="btn btn-lg btn-success"> No </a></div>
                                    <div class="col-sm-6 " style="text-align: center;"><a href="{{ url("pb/admin/package/delete")}}/<?php echo $hash_id;?>" class="btn btn-lg btn-danger"> Yes </a></div>
                                </div>
                                
                                </div>
                          
                                
                                  
                      



                              

                                 

                          
                               
                              
                            </div>

                 

                         
                        </form>
       
                        </div>
                    
                </div>

            
            </div>
        </div>


		
		

	
	
		


        @endsection