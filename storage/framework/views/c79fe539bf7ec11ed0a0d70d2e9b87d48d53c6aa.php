<?php $__env->startSection('head_title', trans('words.tv_show_genres').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>
  
 
 <div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
      <li><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
      <li><?php echo e(trans('words.tv_show_genres')); ?></li>
      </ul>  
    </div>
    </div>
  </div>
</div>

<?php if(get_ads('genres_ad_top')->status!=0): ?>
  <div class="add_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php echo get_ads('genres_ad_top')->ad_code; ?>

        </div>
      </div>
    </div>  
  </div>
  <?php endif; ?>

<div class="main-wrap">
  <div class="section section-padding tv_show vfx_video_list_section text-white">
    <div class="container">
      <div class="row">
        <div class="show-listing">
        <?php $__currentLoopData = $genres_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genres_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-2 col-sm-3 col-xs-6 sm-top-30">
          <div class="vfx_language_list"> 
          <div class="b-language"> 
            <a href="<?php echo e(URL::to('genres/series/'.$genres_data->genre_slug)); ?>">
              <div class="language_text_block">
                <h3 class="name"><?php echo e(stripslashes($genres_data->genre_name)); ?></h3>              
              </div>
              <?php if($genres_data->genres_image): ?>
                <img src="<?php echo e(URL::to('upload/source/'.$genres_data->genres_image)); ?>" alt="">
              <?php else: ?>
                <img src="<?php echo e(URL::to('site_assets/images/colored-painted.jpg')); ?>" alt="">
              <?php endif; ?>              
            
            </a>                    
          </div>                           
          </div>                  
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      
        </div>      
      </div>
    </div>
  </div>
</div>

<?php if(get_ads('genres_ad_bottom')->status!=0): ?>
  <div class="add_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php echo get_ads('genres_ad_bottom')->ad_code; ?>

        </div>
      </div>
    </div>  
  </div>
  <?php endif; ?>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Video Script Package V1.3\FOR FIRST TIME BUYER\video_script\resources\views/pages/series_genres.blade.php ENDPATH**/ ?>