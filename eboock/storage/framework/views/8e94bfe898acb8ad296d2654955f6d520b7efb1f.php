<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Nombre:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Bio Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('bio', 'Descripción:'); ?>

    <?php echo Form::textarea('bio', null, ['class' => 'form-control','id'=>"editor"]); ?>

</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('image', 'Foto:'); ?>

    <?php echo Form::file('image'); ?>

</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('authors.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
<?php /**PATH D:\www\eboock\resources\views/authors/fields.blade.php ENDPATH**/ ?>