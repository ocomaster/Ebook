<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Book
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($book, ['route' => ['books.update', $book->id], 'method' => 'patch','enctype' => 'multipart/form-data']); ?>


                        <?php echo $__env->make('books.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\eboock\resources\views/books/edit.blade.php ENDPATH**/ ?>