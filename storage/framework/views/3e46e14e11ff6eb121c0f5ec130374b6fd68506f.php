<?php $__env->startSection("content"); ?>

  <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-8">
              <div class="card-box">
                 
                <div class="alert alert-danger">
                       
                          License activation not recognized or is inactive, please contact support!
                </div>

                <img src="<?php echo e(URL::to('site_assets/support_policy.png')); ?>" alt="support" class="img-thumbnail">       
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Video Script Package V1.3\FOR FIRST TIME BUYER\video_script\resources\views/admin/pages/verify_purchase.blade.php ENDPATH**/ ?>