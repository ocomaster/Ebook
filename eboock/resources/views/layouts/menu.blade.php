<li class="{{ Request::is('authors*') ? 'active' : '' }}">
    <a href="{!! route('authors.index') !!}"><i class="fas fa-user-tie"></i><span> Autores</span></a>
</li>

<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{!! route('books.index') !!}"><i class="fas fa-book"></i><span> Libros</span></a>
</li>

