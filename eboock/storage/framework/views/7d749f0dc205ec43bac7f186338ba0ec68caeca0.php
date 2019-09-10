<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $author->id; ?></p>
</div>

<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Nombre:'); ?>

    <p><?php echo $author->name; ?></p>
</div>

<!-- Bio Field -->
<div class="form-group">
    <?php echo Form::label('bio', 'Descripción:'); ?>

    <p><?php echo $author->bio; ?></p>
</div>

<!-- Image Field -->
<div class="form-group">
    <?php echo Form::label('image', 'Foto:'); ?>

    <p><img src="<?php echo $author->image; ?>" class="img-responsive" width="150px" height="150px"></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Fecha creacion:'); ?>

    <p><?php echo $author->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Fecha actualización:'); ?>

    <p><?php echo $author->updated_at; ?></p>
</div>

<?php /**PATH D:\www\eboock\resources\views/authors/show_fields.blade.php ENDPATH**/ ?>