<?php $__env->startSection('content'); ?>
    <div class="text-center mt-sm-5">
             <h2>Autores</h2>
            
     </div>

<br>
     <div class="container">
     	<div class="row">
  
     		<?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                  
                    <div class="col-md-4">
                        <div class="card">
                            <div class="text-center">
                                <?php if($author->image==null): ?>
                                    <img class="avatar" src="<?php echo e(asset('images/avatar.png')); ?>" alt="">
                                <?php else: ?>
                                    <img class="avatar" src="<?php echo e($author->image); ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                 <h5 class="card-title text-danger text-center"><?php echo e($author->name); ?> </h5>
                                 <p class="card-text "><?php echo substr($author->bio, 0,150); ?>...</p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="<?php echo e(route('sauthor',$author->id)); ?>" class="btn btn-author"><i class="fas fa-book-reader"></i> Más información</a>
                            </div>
                        </div>
                    </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	

     	</div>
         <?php echo e($authors->links()); ?>

     </div>
  <br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\eboock\resources\views/index3.blade.php ENDPATH**/ ?>