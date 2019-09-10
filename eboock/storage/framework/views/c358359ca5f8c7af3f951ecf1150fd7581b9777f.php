<?php $__env->startSection('content'); ?>
<br>
    <div class="text-center mt-sm-5">
             <h2>Biblioteca</h2>
            
     </div>


     <div class="container">
     	<div class="row">
  
     	<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         
              <div class="col-md-4">
                  
                <div class="card">
                     <?php if($book->cover==null): ?>
                        <img class="card-img-top" src="<?php echo e(asset('images/book.jpg')); ?>" width="100" height="300" >
                     <?php else: ?>
                      <img class="card-img-top " src="<?php echo e($book->cover); ?>" alt="<?php echo e($book->title); ?>" width="100" height="300" >
                     <?php endif; ?>
              
                  
                  
                  
                  <div class="card-body">
                    <h5 class="card-title"><?php echo e($book->title); ?></h5>
                          <p class="card-text"><?php echo substr($book->review, 0,150); ?>...</p>

                          <a href="<?php echo e(route('sbook',$book->id)); ?> " class="btn btn-primary"><i class="fas fa-book-reader"></i> Más información</a>
                    
                  </div>
                </div>

              </div>
                   
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
	

     	</div>
         <?php echo e($books->links()); ?>

     </div>
  <br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\eboock\resources\views/index2.blade.php ENDPATH**/ ?>