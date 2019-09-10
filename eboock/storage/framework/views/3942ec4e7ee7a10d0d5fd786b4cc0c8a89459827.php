<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $book->id; ?></p>
</div>

<!-- Title Field -->
<div class="form-group">
    <?php echo Form::label('title', 'Titulo:'); ?>

    <p><?php echo $book->title; ?></p>
</div>

<!-- Review Field -->
<div class="form-group">
    <?php echo Form::label('review', 'Repaso:'); ?>

    <p><?php echo $book->review; ?></p>
</div>

<!-- Cover Field -->
<div class="form-group">
    <?php echo Form::label('cover', 'Imagen:'); ?>

    <p><img src="<?php echo $book->cover; ?>" class="img-responsive" width="150px" height="150px"></p>
</div>

<!-- Author Id Field -->
<div class="form-group">
    <?php echo Form::label('author_id', 'Autor:'); ?>

    <p><?php echo $book->author->name; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Fecha creacion:'); ?>

    <p><?php echo $book->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Fecha actualizacion:'); ?>

    <p><?php echo $book->updated_at; ?></p>
</div>

<?php /**PATH D:\www\eboock\resources\views/books/show_fields.blade.php ENDPATH**/ ?>