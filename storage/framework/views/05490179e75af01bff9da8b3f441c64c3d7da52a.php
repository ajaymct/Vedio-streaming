<?php $__env->startSection('head_title', trans('words.watch_popular_tv_shows').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>


<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
      <li><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
      <li>Performer</li>
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

        
        

        <div class="show-listing series_listing_view">
      
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
      
      <?php echo $__env->make('_particles.pagination', ['paginator' => $series_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>             
          
        </div>    
      </div>
    </div>
  </div>
</div>


 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Video Script Package V1.3\FOR FIRST TIME BUYER\video_script\resources\views/pages/newseries.blade.php ENDPATH**/ ?>