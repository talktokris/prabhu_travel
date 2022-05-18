@extends('prabhu.login.layouts.master')
@section('title','Home')
@section('contents')


		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Upload Pictures</li>
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


   
        </div>


      

		

   @foreach ($toursData as $rows)


        <!--Images List Start  --->
        <div class="row">
<a href="{{ url('/')}}/pb/admin/package-search" class="btn btn-info pull-right" style="margin-right: 2em;"> Back</a>
            <div class="row col-md-12" style="padding: 2em;">

                                    
                                  @foreach ($tourImageData as $irow)
                                      
                           

                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                      

                            <img src="{{ url('/') }}/images/{{ $rows->id}}/{{ $irow->thumbnail_img }}" draggable="false"  style="margin-top: 1em; border:1px solid #ccc; width:90%; margin:1em;" >

                          
                            
                            <div style="margin: 1em;"><a href="{{ url('/pb/admin/package/delete-image') }}/<?php  echo base64_encode($irow->id) .'/'. base64_encode($rows->id);?>" class="btn btn-danger"> Delete </a></div>
                        </div>
                    </div>
                </div>
                @endforeach
                                
                              

                 
                              


                
       
            </div>


        </div>

        <!-- Images List End --->


		<div class="row">
       

            <div class="col-lg-6">

                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;">Upload New Image</div>
                        <div class="panel-body">
                         
                                
                      
       
                           <form method="POST" action="{{ url('pb/admin/package/image-upload') }}/<?php echo $hash_id;?>" enctype="multipart/form-data">
                                    @csrf 


                         
                                    <div class="col-md-12">

                              

                                        <div class="form-group  col-md-12">
                               
                                        <label>Select Image file :</label>
                                        <input  type="file"  name="image_name" id="image_name" class="form-control form-control-lg @error('image_name') is-invalid @enderror">
                                        <input type="hidden" name="get_id" id="get_id" value="{{ $rows->id }}">
                                        @error('image_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                        <div class="form-group  col-md-12">


                                            <input type="submit" class="btn btn-primary"   value="Upload">


                                       
                                          
                                 <hr>
                                        </div>

                                        <div class="form-group  col-md-12">

                                            <label>Tour Heading ID :</label>
                                            <input id="seo_discription"  name="seo_discription" type="text"  class="form-control " value="{{ $rows->tour_title }}" autocomplete="off" readonly>
                                 
                                        </div>
                                        <div class="form-group  col-md-12">

                                            <label>Package ID  :</label>
                                            <input id="seo_discription"  name="seo_discription" type="text"  class="form-control " value="{{  str_pad($rows->id, 4, "0", STR_PAD_LEFT);  }}" autocomplete="off" readonly>
                                 
                                        </div>
                    

                                        <div class="form-group  col-md-12">

                                            <label>From Destination :</label>
                                            <input id="seo_discription"  name="seo_discription" type="text"  class="form-control " value="{{ $rows->from_destination }}" autocomplete="off" readonly>
                                 
                                        </div>

                                        <div class="form-group  col-md-12">

                                            <label>To Destination :</label>
                                            <input id="seo_discription"  name="seo_discription" type="text"  class="form-control " value="{{ $rows->to_destination }}" autocomplete="off" readonly>
                                 
                                        </div>



                                     
                                    </div> 
                                
                                    
                      

                 

                         
                        </form>
                     
                        </div>
                    
                </div>

            
            </div>
        </div>
        @endforeach


     


		
		

	
	
		


        @endsection