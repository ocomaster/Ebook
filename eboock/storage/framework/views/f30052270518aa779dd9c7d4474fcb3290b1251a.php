<?php $__env->startSection('content'); ?>
<br>
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
              <?php if($author->image ==null): ?>
              <img src="<?php echo e(asset('images/avatar.png')); ?>" class="img-fluid "> 
              <?php else: ?> 
              <img src="<?php echo $author->image; ?>" class="img-fluid "> 
              <?php endif; ?>
               
            </div>
           

            <div class="col-md-8">
                <div class="card mt-2  ">
                  <div class="card-header coltitle">
                   <h1 class="text-center textotitle"><?php echo $author->name; ?></h1> 
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <p><?php echo $author->bio; ?></p>
                      <footer class="blockquote-footer"><cite title="Source Title"><?php echo $author->name; ?></cite></footer>
                    </blockquote>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\eboock\resources\views/sauthor.blade.php ENDPATH**/ ?>