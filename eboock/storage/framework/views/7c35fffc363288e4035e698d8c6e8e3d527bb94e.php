<?php $__env->startSection('content'); ?>
<br>

    <div class="text-center mt-sm-5">
             <h2>Últimos Libros</h2>
             <p>La mejor colección literaria de la Red.</p>
     </div>


     <div class="container">
      <div class="row">
  
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
        <div class="col-md-4">
            
          <div class="card">
               <?php if($book->cover==null): ?>
                  <img class="card-img-top" src="<?php echo e(asset('images/book.jpg')); ?>" width="300" height="300" >
               <?php else: ?>
                <img class="card-img-top " src="<?php echo e($book->cover); ?>" alt="<?php echo e($book->title); ?>" width="300" height="300" >
               <?php endif; ?>
        
            
            
            
            <div class="card-body">
              <h5 class="card-title"><?php echo e($book->title); ?></h5>
                    <p class="card-text"><?php echo substr($book->review, 0,150); ?>...</p>

                    <a href="<?php echo e(route('sbook', $book->id)); ?>" class="btn btn-primary"><i class="fas fa-book-reader"></i> Más información</a>
              
            </div>
          </div>

        </div>
             
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  

      </div>
    <a href="<?php echo e(route('pbooks')); ?>" class="btn btn-author text-center">MÁS LIBROS</a>
     </div>
  <br>




  <div class="seller">

       <div class="text-center ">
         <br>
          <h2>Últimos autores</h2>
           <p>Grandes escritores de la literatura universal</p>
       </div>
          

   
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
                   <p class="card-text "><?php echo substr($author->bio, 0,150); ?>..</p>
          </div>
          <div class="card-footer text-center">
            <a href="<?php echo e(route('sauthor', $author->id)); ?>" class="btn btn-author"><i class="fas fa-book-reader"></i> Más información</a>
          </div>
        </div>
      </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    </div>
     <a href="<?php echo e(route('pauthors')); ?> " class="btn btn-primary text-center">MÁS AUTORES</a>
  </div>
    <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\eboock\resources\views/index.blade.php ENDPATH**/ ?>