@extends('site_app')

@section('head_title', ''.' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')
  
 
<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
         <li><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
         <li></li>      
      </ul>  
    </div>
  </div>
  </div>
</div>

<div class="main-wrap">
  <div class="section section-padding text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <span class="clt-content"><?php echo $genres_list[0]->description;?></span>
        </div>
      </div>
      
    </div>
  </div>
</div>
 

 
@endsection