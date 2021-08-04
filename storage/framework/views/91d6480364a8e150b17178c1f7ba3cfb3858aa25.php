<?php $__env->startSection('head_title', trans('words.watch_popular_tv_shows').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>

  
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 -->
<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
      <li><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
      <li><?php echo e(trans('words.shows_text')); ?></li>
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
              <option value="?filter=new" <?php if(isset($_GET['filter']) && $_GET['filter']=='new' ): ?> selected <?php endif; ?>><?php echo e(trans('words.newest')); ?></option>
            <option value="?filter=old" <?php if(isset($_GET['filter']) && $_GET['filter']=='old' ): ?> selected <?php endif; ?>><?php echo e(trans('words.oldest')); ?></option>
            <option value="?filter=alpha" <?php if(isset($_GET['filter']) && $_GET['filter']=='alpha' ): ?> selected <?php endif; ?>><?php echo e(trans('words.a_to_z')); ?></option>
            <option value="?filter=rand" <?php if(isset($_GET['filter']) && $_GET['filter']=='rand' ): ?> selected <?php endif; ?>><?php echo e(trans('words.random')); ?></option>
            </select> 
          </div>      
        </div>
    </div>      
</div>        



 <div class="main-wrap">
  <div class="section section-padding tv_show vfx_video_list_section text-white">
    <div class="container">
      <div class="row">

        
        

            
            




    <div class="row">
    <div class="col-sm-4" style="background-color:blue;"><div class="show-listing series_listing_view">
                
                <?php $__currentLoopData = $series_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <a href="<?php echo e(URL::to('newseriesperson?id='.$series_data->id)); ?>">  
                  <div class="col-md-3 col-sm-4 col-xs-6 sm-top-30">
                    <div class="vfx_upcomming_item_block"> 
                  <div class="series_view_img">
                  <img class="img-responsive" src="<?php echo e(asset('upload/source/'.$series_data->profile_image)); ?>" alt="show">
                  </div>  
                  <div class="vfx_upcomming_detail">
                  <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes($series_data->series_name),25)); ?></h4>          
                  </div>            
                    </div>                  
                  </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
                
                    
            </div></div>
        <div class="col-sm-1"></div>

    <div class="col-sm-7" style="background-color:yellow; height: 200px">
      <?php $__currentLoopData = $series_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <a href="<?php echo e(URL::to('newseriesperson?id='.$series_data->id)); ?>">  
                  <div class="col-md-3 col-sm-4 col-xs-6 sm-top-30">
                    <div class="vfx_upcomming_item_block"> 
                  <div class="series_view_img">
                  <img class="img-responsive" src="<?php echo e(asset('upload/source/'.$series_data->profile_image)); ?>" alt="show">
                  </div>  
                  <div class="vfx_upcomming_detail">
                  <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes($series_data->series_name),25)); ?></h4>          
                  </div>            
                    </div>                  
                  </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

        
      </div>

    </div>
  

 </div> </div>
<div class="section section-padding top-padding-normal vfx_movie_section_block">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="vfx_section_header">
            <h2 class="vfx_section_title"><?php echo e(trans('words.you_may_like')); ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="owl-carousel video-carousel" id="video-carousel">
          <?php $__currentLoopData = $series_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movies_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
          
           <div class="vfx_video_item">
              <div class="thumb-wrap"> <img src="<?php echo e(asset('upload/source/'.$movies_data->profile_image)); ?>" alt="Movie Thumb"> 
                <div class="thumb-hover"> 
            
               <!--  <i class="icon fa fa-play"></i><span class="ripple"></span> -->
            
              </div>
              </div>
              <div class="vfx_video_detail">
                <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes($movies_data->name),12)); ?></h4>
                <!-- <p class="vfx_video_length"><i class="fa fa-clock-o"></i> <?php echo e($movies_data->duration); ?></p>  -->               
               </div>
            </div>
          </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Video Script Package V1.3\FOR FIRST TIME BUYER\video_script\resources\views/pages/series_person.blade.php ENDPATH**/ ?>