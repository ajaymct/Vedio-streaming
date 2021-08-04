@extends("admin.admin_app")

@section("content")

 <style type="text/css">
  .iframe-container {
  overflow: hidden;
  padding-top: 56.25% !important;
  position: relative;
}
 
.iframe-container iframe {
   border: 0;
   height: 100%;
   left: 0;
   position: absolute;
   top: 0;
   width: 100%;
}
</style>

  <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card-box">

                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                 @if(Session::has('flash_message'))
                                                <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span></button>
                                                    {{ Session::get('flash_message') }}
                                                </div>
                                @endif

                 {!! Form::open(array('url' => array('admin/sports_category/add_edit_category'),'class'=>'form-horizontal','name'=>'category_form','id'=>'category_form','role'=>'form','enctype' => 'multipart/form-data')) !!}  
                  
                  <input type="hidden" name="id" value="{{ isset($cat_info->id) ? $cat_info->id : null }}">

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Performers Name</label>
                    <div class="col-sm-8">
                      <input type="text" name="category_name" value="{{ isset($cat_info->name) ? stripslashes($cat_info->name) : null }}" class="form-control">
                    </div>
                  </div>
                   
                 
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Profile Image <small id="emailHelp" class="form-text text-muted">({{trans('words.recommended_resolution')}} : 650x350)</small></label>
                    <div class="col-sm-8">
                      <div class="input-group">

                        <input type="text" name="season_poster" id="season_poster" value="{{ isset($season_info->season_poster) ? $season_info->season_poster : null }}" class="form-control" readonly>
                        <div class="input-group-append">                           
                          <button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#model_poster">Select</button>
                      
                        </div>
                      </div>
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="offset-sm-3 col-sm-9">
                      <button type="submit" class="btn btn-primary waves-effect waves-light"> {{trans('words.save')}} </button>                      
                    </div>
                  </div>
                {!! Form::close() !!} 
              </div>
            </div>            
          </div>              
        </div>
      </div>
      @include("admin.copyright") 
    </div>
<div id="model_poster" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="max-width: 900px;">
        <div class="modal-content">             
            <div class="modal-body">
               <div class="iframe-container">
               <iframe src="{{URL::to('responsive_filemanager/filemanager/dialog.php?type=2&sort_by=date&field_id=season_poster&relative_url=1')}}" frameborder="0"></iframe>
               </div>
            </div>
        </div> 
    </div> 
</div> 
   

@endsection