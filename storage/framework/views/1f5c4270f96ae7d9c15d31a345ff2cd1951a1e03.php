<?php $__env->startSection('head_title', $page_info->page_title.' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>
  
 
<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
         <li><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
         <li><?php echo e(stripslashes($page_info->page_title)); ?></li>      
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
          <span class="clt-content"><?php echo stripslashes($page_info->page_content); ?></span>
        </div>
      </div>
      <div class="row">
    <div class="from-list-lt">
        <div class="col-md-8 col-xs-12 col-lg-8 col-sm-12 col-xs-offset-2">

          <div class="message">
                         
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                    
                        <ul style="list-style: none;">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                                    
            </div>
            <?php if(Session::has('flash_message')): ?>

              <div class="alert alert-success fade in">
                  
                 <?php echo e(Session::get('flash_message')); ?>

               </div>

                 
            <?php endif; ?>

          <?php echo Form::open(array('url' => 'contact_send','class'=>'form-float form-alt','id'=>'contact_form','role'=>'form')); ?>  
            <div class="row">
              <div class="form-group col-xs-12 col-sm-6"> 
                <input class="form-control" placeholder="<?php echo e(trans('words.name')); ?>" type="text" name="name" required>
              </div>              
              <div class="form-group col-xs-12 col-sm-6"> 
                <input class="form-control" placeholder="<?php echo e(trans('words.email')); ?>" type="text" name="email" required>
              </div>
              <div class="form-group col-xs-12 col-sm-6"> 
                <input class="form-control" placeholder="<?php echo e(trans('words.phone')); ?>" type="text" name="phone">
              </div>
              <div class="form-group col-xs-12 col-sm-6"> 
                <input class="form-control" placeholder="<?php echo e(trans('words.subject')); ?>" type="text" name="subject" required>
              </div>
              <div class="form-group col-xs-12"> 
                <textarea class="form-control" placeholder="<?php echo e(trans('words.your_message')); ?>" name="message" required></textarea>
              </div>              
              <div class="form-group col-xs-12">
                <button class="btn" type="submit"><?php echo e(trans('words.submit')); ?></button>
              </div>
            </div>
          <?php echo Form::close(); ?>

        </div>
        
      </div>
      </div>
    </div>
  </div>
</div>
 

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Video Script Package V1.3\FOR FIRST TIME BUYER\video_script\resources\views/pages/pages_contact.blade.php ENDPATH**/ ?>