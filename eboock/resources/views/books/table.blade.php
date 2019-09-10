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
        @foreach($books as $book)
            <tr>
                <td>{!! $book->title !!}</td>
            <td>{!! substr($book->review, 0.350) !!}</td>
            <td><img src="{!! $book->cover !!}" alt="{!! $book->cover !!}" class="img-responsive" width="150px" height="150px" ></td>
            <td>{!! $book->author->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('books.show', [$book->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('books.edit', [$book->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $books->links()}}
