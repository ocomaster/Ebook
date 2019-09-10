<li class="<?php echo e(Request::is('authors*') ? 'active' : ''); ?>">
    <a href="<?php echo route('authors.index'); ?>"><i class="fas fa-user-tie"></i><span> Autores</span></a>
</li>

<li class="<?php echo e(Request::is('books*') ? 'active' : ''); ?>">
    <a href="<?php echo route('books.index'); ?>"><i class="fas fa-book"></i><span> Libros</span></a>
</li>

<?php /**PATH D:\www\eboock\resources\views/layouts/menu.blade.php ENDPATH**/ ?>