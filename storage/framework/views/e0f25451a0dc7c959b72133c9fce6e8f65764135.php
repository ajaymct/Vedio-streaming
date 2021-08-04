<?php $__env->startSection('head_title', ''.' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>
  
 
<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
         <li><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
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
 

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Video Script Package V1.3\FOR FIRST TIME BUYER\video_script\resources\views/pages/extralink.blade.php ENDPATH**/ ?>