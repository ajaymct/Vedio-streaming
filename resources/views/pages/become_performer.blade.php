@extends('site_app')

@section('head_title', 'Performer'.' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')
<style type="text/css">
  #loginform{
  	margin-top: 61px;
  }
</style>

<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
		  <ul>
			<li><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
			<li>Become Performer</li>
		  </ul>       
	  </div>	  
    </div>
  </div>
</div>
	 <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card-box">
                {!! Form::open(array('url' => 'addperformer','class'=>'vfx_accountform loginform','id'=>'loginform','role'=>'form')) !!}
                   
                 <!--  <div class="form-group row">
                  	<div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">First Name</label>
                    <div class="col-sm-3">
                      <input type="text" name="fname"  class="form-control">
                    </div>
                  </div> -->
                   <!-- <div class="form-group row">
                   <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Last Name</label>
                    <div class="col-sm-3">
                      <input type="text" name="lname"  class="form-control">
                    </div>
                  </div> -->
                  <div class="form-group row">
                   <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Stage name</label>
                    <div class="col-sm-3">
                      <input type="text" name="stagename"  class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                   <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Email</label>
                    <div class="col-sm-3">
                      <input type="email" name="email"  class="form-control">
                    </div>
                  </div>
                   <!-- <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Upload Picture</label>
                    <div class="col-sm-3">
                      <input type="file" name="image"  class="form-control">
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Phone</label>
                    <div class="col-sm-3">
                      <input type="text" name="number"  class="form-control">
                    </div>
                  </div>
                   <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Gender</label>
                    <div class="col-sm-3">
                      <input type="text" name="gender"  class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Age</label>
                    <div class="col-sm-3">
                      <input type="date" name="age"  class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Location</label>
                    <div class="col-sm-3">
                      <input type="text" name="location"  class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Height</label>
                    <div class="col-sm-3">
                      <input type="text" name="height"  class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Weight</label>
                    <div class="col-sm-3">
                      <input type="text" name="weight"  class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Experience with acting</label>
                    <div class="col-sm-3">
                      <textarea name="experienceacting" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Experience with acting</label>
                    <div class="col-sm-3">
                      <textarea name="experienceacting" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Physical Considerations</label>
                    <div class="col-sm-3">
                      <textarea name="consideration" class="form-control"></textarea>
                    </div>
                  </div>
<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
    <input type="hidden" name="action" value="validate_captcha">
                  <div class="form-group row">
                    <div class="col-md-3"></div>
                   
                    <div class="col-sm-2">
                      <button type="submit" class="btn-primary">Create </button>
                    </div>
                  </div>
                {!! Form::close() !!} 
              </div>
            </div>            
          </div>              
        </div>
      </div>
     
    </div> 
  



 <div class="main-wrap">
  <div class="section section-padding tv_show vfx_video_list_section text-white">
    <div class="container">
      <div class="row">
          
        <div class="show-listing vfx_movie_list_item">
         
     
 
       
           
       
        </div>    
      </div>
    </div>
  </div>
</div>
   
 
@endsection

<script src="https://www.google.com/recaptcha/api.js?render=6LcP4xwbAAAAAP-s9fZ1XIN-TonNCCxqduRdTAQx"></script>
<script>
    grecaptcha.ready(function() {
    // do request for recaptcha token
    // response is promise with passed token
        grecaptcha.execute('6LcP4xwbAAAAAP-s9fZ1XIN-TonNCCxqduRdTAQx', {action:'validate_captcha'})
                  .then(function(token) {
            // add token value to form
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>