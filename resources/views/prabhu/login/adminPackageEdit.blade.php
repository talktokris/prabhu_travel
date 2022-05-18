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

            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">Create New Package</div>
                        <div class="panel-body">
                            @foreach ($currentTourData as  $row)
                           <form method="POST" action="{{ url('pb/admin/package/edit') }}/<?php echo base64_encode($row->id);?>">
                                    @csrf 


                         
                                        
                                
                                    
                            <div class="col-md-6">
                          
                                
                                  
                                        
                                
                                    <div class="form-group col-md-12">
                                        <label>Tour Title : <span style="color: red;">*</span></label>
                                        <input id="tour_title"  name="tour_title" type="text" placeholder="Catagory Name" class="form-control @error('tour_title') is-invalid @enderror" value="{{  $row->tour_title ?? old('tour_title') }}"  autocomplete="off" autofocus>
        
                                        <input type="hidden" name="id" name="id" value="<?php echo $row->id ;?>">
                                        @error('tour_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label>Short Discription : <span style="color: red;">*</span></label>
                                        <input id="shot_discription_line"  name="shot_discription_line" type="text" placeholder="Description" class="form-control @error('shot_discription_line') is-invalid @enderror" value="{{ $row->shot_discription_line ?? old('shot_discription_line') }}"  autocomplete="off" autofocus>
                                   

                                        @error('shot_discription_line')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>From Destination : <span style="color: red;">*</span></label>
                                                <select name="from_destination" id="from_destination" class="form-control @error('from_destination') is-invalid @enderror">
                                             
                                                    <option value="{{$row->from_destination ??  old('from_destination')  }}"> {{  $row->from_destination ?? old('from_destination')  }} </option>
                                                    @foreach ($destinationsData as $dRow)
                                                    <option value="{{ $dRow->full_name}}">{{ $dRow->full_name}}</option>
                                                 @endforeach
                                                </select>
                                                @error('from_destination')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>To Destination : <span style="color: red;">*</span></label>
                                                <select name="to_destination" id="to_destination" class="form-control @error('to_destination') is-invalid @enderror">
                                             
                                                    
                                                    <option value="{{ $row->to_destination ?? old('to_destination')  }}">{{ $row->to_destination ?? old('to_destination')  }}</option>
                                                    @foreach ($destinationsData as $dRow)
                                                        <option value="{{ $dRow->full_name}}">{{ $dRow->full_name}}</option>
                                                     @endforeach
                                                </select>
                                                @error('to_destination')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                          </div>


                                        
                                    </div>

                                    <div class="form-group">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Category One : <span style="color: red;">*</span></label>
                                                <select name="tour_type_one" id="tour_type_one" class="form-control @error('tour_type_one') is-invalid @enderror">
                                             
                                                    <option value="{{ $row->tour_type_one ?? old('tour_type_one')  }}">{{ $row->tour_type_one ?? old('tour_type_one')  }}</option>
                                                    @foreach ($tourTypeData as $tdRow)
                                                        <option value="{{ $tdRow->full_name}}">{{ $tdRow->full_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('tour_type_one')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Category Two :</label>
                                     
                                                <select name="tour_type_two" id="tour_type_two" class="form-control @error('tour_type_two') is-invalid @enderror">
                                             
                                                   <option value="{{ $row->tour_type_two ?? old('tour_type_two')  }}">{{ $row->tour_type_two ?? old('tour_type_two')  }}</option>
                                                    @foreach ($tourTypeData as $tdRow)
                                                        <option value="{{ $tdRow->full_name}}">{{ $tdRow->full_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('tour_type_two')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                          </div>
                              
                                    </div>

                                    <div class="form-group">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Category Three :</label>
                                
                                                <select name="tour_type_three" id="tour_type_three" class="form-control @error('tour_type_three') is-invalid @enderror">
                                             
                                                  
                                                    <option value="{{ $row->tour_type_three ?? old('tour_type_three')  }}">{{ $row->tour_type_three ?? old('tour_type_three')  }}</option>
                                                    @foreach ($tourTypeData as $tdRow)
                                                        <option value="{{ $tdRow->full_name}}">{{ $tdRow->full_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('tour_type_three')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Category Four : </label>
                                                <select name="tour_type_four" id="tour_type_four" class="form-control @error('tour_type_four') is-invalid @enderror">
                                             
                                                  
                                                    <option value="{{ $row->tour_type_four ?? old('tour_type_four')  }}">{{ $row->tour_type_four ??  old('tour_type_four')  }}</option>
                                                    @foreach ($tourTypeData as $tdRow)
                                                        <option value="{{ $row->from_destination ?? $tdRow->full_name}}">{{ $row->from_destination ?? $tdRow->full_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('tour_type_three')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                          </div>
                                  
                                    </div>

                                 

                          
                               
                              
                            </div>

                            <div class="col-md-6">
                          
                                
                                  
                                        
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Age Range : <span style="color: red;">*</span>  ( Ex: 0 - 60 )</label>
                                            <input id="age_range"  name="age_range" type="text" placeholder="Age Range" class="form-control @error('age_range') is-invalid @enderror" value="{{ $row->age_range ?? old('age_range') }}"  autocomplete="off" autofocus>
    
                                            @error('age_range')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">

                                    <label>Max Tour Size : <span style="color: red;">*</span></label>
                                    <input id="max_tour_size"  name="max_tour_size" type="number" placeholder="Max Size" class="form-control @error('max_tour_size') is-invalid @enderror" value="{{ $row->max_tour_size ?? old('max_tour_size') }}"  autocomplete="off" autofocus>
                               

                                    @error('max_tour_size')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                                        </div>
                                    </div>
                       
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Operated Languages : <span style="color: red;">*</span> ( Saparate with comma )</label>
                                        <input id="operated_in"  name="operated_in" type="text" placeholder="Operated Language" class="form-control @error('operated_in') is-invalid @enderror" value="{{ $row->operated_in ?? old('operated_in') }}"  autocomplete="off" autofocus>
                                
                                        @error('operated_in')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>
                                </div>


                                <div class="form-group">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Total Days : <span style="color: red;">*</span></label>
                                            <input id="tour_days_number"  name="tour_days_number" type="number" placeholder="Tour Days" class="form-control @error('tour_days_number') is-invalid @enderror" value="{{ $row->tour_days_number ?? old('tour_days_number') }}"  autocomplete="off" autofocus>
        
        
                                            @error('tour_days_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tour Days Text : <span style="color: red;">*</span> ( Ex : 1 Day Trip)</label>
                                            <input id="tour_days_text"  name="tour_days_text" type="text" placeholder="Days Text" class="form-control @error('tour_days_text') is-invalid @enderror" value="{{ $row->tour_days_text ?? old('tour_days_text') }}"  autocomplete="off">
                                       
        
                                            @error('tour_days_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                      </div>


                             
                                </div>


                                <div class="form-group">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Price (RM):</label>
                                            <input id="price"  name="price" type="number" placeholder="Price" class="form-control @error('price') is-invalid @enderror" value="{{ $row->price ?? old('price') ?? 0 }}"  autocomplete="off" autofocus>
                                       
        
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Discount Percentage : <span style="color: red;">*</span></label>
                                            <input id="discount_percentage"  name="discount_percentage" type="number" placeholder="Discount Name" class="form-control @error('discount_percentage') is-invalid @enderror" value="{{ $row->discount_percentage ?? old('discount_percentage') ?? 0 }}"  autocomplete="off" value="0">
                                       
        
                                            @error('discount_percentage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                      </div>
                    
                                </div>


                                <div class="form-group">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Show Home Status :</label>
                             
                                    <?php   if(($row->home_page_status)==1){ $HomeStatusText= 'Show'; } 
                                            elseif(old('home_page_status') ==1){ $HomeStatusText= 'Show'; } 
                                            else { $HomeStatusText='Not Show';} ?>
                                    <select name="home_page_status" id="home_page_status" class="form-control @error('home_page_status') is-invalid @enderror">
                                        <option value="{{  $row->home_page_status ?? old('home_page_status')  }}">{{ $HomeStatusText ?? 'Select'  }}</option>
                                        <option value="1">Show</option>
                                        <option value="0">Not Show</option>

                                    </select>

                                    @error('home_page_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Active Status :</label>
                             
                                            <?php  if(($row->status)==1){ $statusText= 'Publish'; } 
                                            elseif( old('status')==1){ $statusText= 'Publish'; } else { $statusText='Draft';} ?>
                                             <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                                 <option value="{{ $row->status ?? old('status')  }}">{{ $statusText ?? 'Select'  }}</option>
                                                
                                                 <option value="0">Draft</option>
                                      
                                                 <option value="1">Publish</option>
         
         
                                             </select>
         
                                             @error('status')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                        </div>
                                      </div>
                          
                                </div>


                    
             

                    
                           
                                
                           
                          
                            </div>


                            <div class="col-md-12">
                          
                                
                      

                                <div class="form-group col-md-12">
                                    <label>Tour Information :</label>
                                
                                    <textarea  name="tour_information" id="tour_information" class="form-control @error('tour_information') is-invalid @enderror" rows="10"  autocomplete="off" autofocus>{{ $row->tour_information ?? old('tour_information') }}</textarea>
                                    @error('tour_information')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group  col-md-12">
                                    <label>Tour Details :</label>
                                
                                    <textarea  name="tour_details" id="tour_details" class="form-control @error('tour_details') is-invalid @enderror" rows="10"  autocomplete="off" autofocus>{{ $row->tour_details ?? old('tour_details') }}</textarea>
                                  
                                    @error('tour_details')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group  col-md-12">
                                    <label>SEO Keywords :</label>
                                    <input id="seo_keyword"  name="seo_keyword" type="text" placeholder="Search Keywords" class="form-control @error('seo_keyword') is-invalid @enderror" value="{{ $row->seo_keyword ?? old('seo_keyword') }}"  autocomplete="off" autofocus>
    

                                    @error('tour_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group  col-md-12">
                                    <label>SEO Discription :</label>
                                    <input id="seo_discription"  name="seo_discription" type="text" placeholder="SEO Discription" class="form-control @error('seo_discription') is-invalid @enderror" value="{{ $row->seo_discription ?? old('seo_discription') }}" autocomplete="off" autofocus>
                         
                                    @error('seo_discription')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                             


                                <div class="form-group  col-md-12">
                                    <input type="submit" class="btn btn-lg btn-primary pull-right" value="Save Package">
                                </div>
                              
                                
                           
                          
                            </div>

                         
                        </form>
                        @endforeach
                        </div>
                    
                </div>

            
            </div>
        </div>


		
		

	
	
		


        @endsection