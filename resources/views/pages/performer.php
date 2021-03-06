@extends('site_app')

@section('head_title', 'Performer'.' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')


<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
		  <ul>
			<li><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
			<li>{{trans('words.movies_text')}}</li>
		  </ul>       
	  </div>	  
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
	<div class="custom_select_filter">
	  <div class="custom-select">
		<select id="filter_list" class="selectpicker show-tick form-control is-invalid form-control-lg" required>
		  <option value="?filter=new" @if(isset($_GET['filter']) && $_GET['filter']=='new' ) selected @endif>{{trans('words.newest')}}</option>
		  <option value="?filter=old" @if(isset($_GET['filter']) && $_GET['filter']=='old' ) selected @endif>{{trans('words.oldest')}}</option>
		  <option value="?filter=alpha" @if(isset($_GET['filter']) && $_GET['filter']=='alpha' ) selected @endif>{{trans('words.a_to_z')}}</option>
		  <option value="?filter=rand" @if(isset($_GET['filter']) && $_GET['filter']=='rand' ) selected @endif>{{trans('words.random')}}</option>
		</select> 
	  </div>      
	</div>
  </div>      
</div>



 <div class="main-wrap">
  <div class="section section-padding tv_show vfx_video_list_section text-white">
    <div class="container">
      <div class="row">
          
        <div class="show-listing vfx_movie_list_item">
         
      @foreach($movies_list as $movies_data)      
      
      <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="vfx_video_item">
              <div class="thumb-wrap"> <img src="{{URL::to('upload/source/'.$movies_data->name)}}" alt="{{$movies_data->name}}">
               

                <div class="thumb-hover"> 
         
          <i class="icon fa fa-play"></i><span class="ripple"></span>
         
          </div>
              </div>
              <div class="vfx_video_detail">
                <h4 class="vfx_video_title"><a href="{{ URL::to('movies/'.$movies_data->name.'/'.$movies_data->id) }}">{{Str::limit(stripslashes($movies_data->name),12)}}</a></h4>
                <p class="vfx_video_length"><i class="fa fa-clock-o"></i> {{$movies_data->name}}</p>
               </div>
            </div>
      </div>  
      </a>

     
      @endforeach 
 
       
              @include('_particles.pagination', ['paginator' => $movies_list])             
           
       
        </div>    
      </div>
    </div>
  </div>
</div>
    
    @if(get_ads('movie_list_ad_bottom')->status!=0)
        <div class="add_banner_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                {!!get_ads('movie_list_ad_bottom')->ad_code!!}
              </div>
            </div>
          </div>  
        </div>
        @endif
 
@endsection