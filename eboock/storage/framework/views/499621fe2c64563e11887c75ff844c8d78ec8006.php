
<div class="container">
    <div class="row">
        <div class="col-md-12">

                        <?php echo e(Form::open(['route' => 'authors.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])); ?>

                            <div class="form-group">
                                <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Descripcion']); ?>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>


<div class="table-responsive">
    <table class="table" id="authors-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Foto</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $author->name; ?></td>
            <td><?php echo substr($author->bio, 0,350); ?></td>
            <td><img src="<?php echo $author->image; ?>" class="img-responsive" width="150px" height="150px"></td>
                <td>
                    <?php echo Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'delete']); ?>

                    <div class='btn-group' >
                            <div class="row">
                        <a href="<?php echo route('authors.show', [$author->id]); ?>" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('authors.edit', [$author->id]); ?>" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                        </div>
                    <?php echo Form::close(); ?>

                            
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</div>

            

<?php echo e($authors->links()); ?><?php /**PATH D:\www\eboock\resources\views/authors/table.blade.php ENDPATH**/ ?>