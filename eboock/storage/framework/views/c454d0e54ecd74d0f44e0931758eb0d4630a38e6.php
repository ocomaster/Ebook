<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Titulo:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- Review Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('review', 'Repaso:'); ?>

    <?php echo Form::textarea('review', null, ['class' => 'form-control','id'=>"editor"]); ?>

</div>

<!-- Cover Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cover', 'Imagen:'); ?>

    <?php echo Form::file('cover'); ?>

</div>
<div class="clearfix"></div>

<!-- Author Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('author_id', 'Autor:'); ?>

    <?php echo Form::select('author_id', $authors, null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('books.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH D:\www\eboock\resources\views/books/fields.blade.php ENDPATH**/ ?>