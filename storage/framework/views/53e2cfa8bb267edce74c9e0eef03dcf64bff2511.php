<?php $__env->startSection('head_title', 'Performer'.' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>
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
#video_image_thumb{
  width: 223px !important;
    margin-left: -80px !important;
}


  #loginform{
    margin-top: 61px;
  }
  .vfx_accountforms [type=text], .vfx_accountform [type=password], .vfx_accountform [type=email] {
    width: 100%;
    / border: 0px; /
    background: transparent;
    color: #fff;
    font-weight: 500;
    border-bottom: 2px solid #fff;
    line-height: 26px;
    padding: 10px 5px;
    border-radius: -28px;
    / box-shadow: 0 0px 6px rgb(0 0 0 / 20%); /
}
.modal .modal-dialog .modal-content {
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    border-color: #DDDDDD;
    border-radius: 2px;
    box-shadow: none;
    padding: 25px;
}
</style>

<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
      <li><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
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
                <?php echo Form::open(array('url' => 'addperformer','class'=>'vfx_accountforms loginform','id'=>'loginform','role'=>'form','enctype' => 'multipart/form-data')); ?>

                   <input type="hidden" name="id" value="">
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Stage Name</label>
                    <div class="col-sm-3">
                      <input type="text" name="fname"  class="form-control" value="">
                    </div>
                  </div>
                 
                  <div class="form-group row">
                   <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Email Id</label>
                    <div class="col-sm-3">
                      <input type="email" name="email"  class="form-control" value="">
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-md-2 col-form-label">Banner Image* <small id="emailHelp" class="form-text text-muted"><br>(<?php echo e(trans('words.recommended_resolution')); ?> : 270X390)</small></label>
                    <div class="col-sm-8">
                      <div class="input-group">

                        <input type="text" name="video_image_thumb" id="video_image_thumb" value="" class="form-control" readonly>
                        <div class="input-group-append">                           
                          <button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#model_movie_thumb">Select</button>
                      
                        </div>
                      </div>
                     
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label">Phone Number</label>
                    <div class="col-sm-3">
                      <input type="text" name="number"  class="form-control" value="">
                    </div>
                  </div>
                   <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label" >Gender</label>
                    <div class="col-sm-3">
                      <input type="text" name="gender"  class="form-control" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label"  >Age</label>
                    <div class="col-sm-3">
                      <input type="date" name="age"  class="form-control" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label" >Location</label>
                    <div class="col-sm-3">
                      <input type="text" name="location"  class="form-control" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label" >Height</label>
                    <div class="col-sm-3">
                      <input type="text" name="height"  class="form-control" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label" >Weight</label>
                    <div class="col-sm-3">
                      <input type="text" name="weight"  class="form-control" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label" >Experience with acting</label>
                    <div class="col-sm-3">
                      <textarea name="experienceacting" class="form-control" value=""></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label class="col-sm-1 col-form-label" >Physical Considerations</label>
                    <div class="col-sm-3">
                      <textarea name="consideration" class="form-control" value=""></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-3"></div>
                   
                    <div class="col-sm-2">
                      <button type="submit" class="btn-primary">Create </button>
                    </div>
                  </div>
                <?php echo Form::close(); ?> 
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
   
 
<?php $__env->stopSection(); ?>
<div id="model_movie_thumb" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="max-width: 900px;">
        <div class="modal-content">             
            <div class="modal-body">
               <div class="iframe-container">
               <iframe src="<?php echo e(asset('responsive_filemanager/filemanager/dialog.php?type=2&sort_by=date&field_id=video_image_thumb&relative_url=1')); ?>" frameborder="0"></iframe>
               </div>
            </div>
        </div> 
    </div> 
</div>  
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Video Script Package V1.3\FOR FIRST TIME BUYER\video_script\resources\views/pages/become_performer.blade.php ENDPATH**/ ?>