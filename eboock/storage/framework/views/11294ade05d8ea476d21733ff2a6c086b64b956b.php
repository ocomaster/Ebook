<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Titulo</th>
        <th>Repaso</th>
        <th>Imagen</th>
        <th>Autor</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $book->title; ?></td>
            <td><?php echo substr($book->review, 0.350); ?></td>
            <td><img src="<?php echo $book->cover; ?>" alt="<?php echo $book->cover; ?>" class="img-responsive" width="150px" height="150px" ></td>
            <td><?php echo $book->author->name; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('books.show', [$book->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('books.edit', [$book->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php echo e($books->links()); ?>

<?php /**PATH D:\www\eboock\resources\views/books/table.blade.php ENDPATH**/ ?>