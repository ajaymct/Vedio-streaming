<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
     
   
    <?php $__currentLoopData = $movies_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $movies_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
    <url>        
        <loc><?php echo e(URL::to('movies/'.$movies_data->name.'/'.$movies_data->id)); ?></loc>
        <changefreq>Daily</changefreq>
        <priority>0.6</priority>
     </url>        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
     
</urlset><?php /**PATH C:\xampp\htdocs\Video Script Package V1.3\FOR FIRST TIME BUYER\video_script\resources\views/pages/sitemap_performer.blade.php ENDPATH**/ ?>