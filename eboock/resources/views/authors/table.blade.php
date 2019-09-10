{{--Búsqueda y filtrado Query Scope --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">

                        {{ Form::open(['route' => 'authors.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Descripcion']) !!}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        {{ Form::close() }}
        </div>
    </div>
</div>

{{-- Cierre de Búsqueda y filtrado Query Scope  --}}
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
        @foreach($authors as $author)
            <tr>
                <td>{!! $author->name !!}</td>
            <td>{!! substr($author->bio, 0,350)  !!}</td>
            <td><img src="{!! $author->image !!}" class="img-responsive" width="150px" height="150px"></td>
                <td>
                    {!! Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'delete']) !!}
                    <div class='btn-group' >
                            <div class="row">
                        <a href="{!! route('authors.show', [$author->id]) !!}" class='btn btn-success btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('authors.edit', [$author->id]) !!}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                        </div>
                    {!! Form::close() !!}
                            
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

            

{{ $authors->links()}}