<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $book->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Titulo:') !!}
    <p>{!! $book->title !!}</p>
</div>

<!-- Review Field -->
<div class="form-group">
    {!! Form::label('review', 'Repaso:') !!}
    <p>{!! $book->review !!}</p>
</div>

<!-- Cover Field -->
<div class="form-group">
    {!! Form::label('cover', 'Imagen:') !!}
    <p><img src="{!! $book->cover !!}" class="img-responsive" width="150px" height="150px"></p>
</div>

<!-- Author Id Field -->
<div class="form-group">
    {!! Form::label('author_id', 'Autor:') !!}
    <p>{!! $book->author->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fecha creacion:') !!}
    <p>{!! $book->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Fecha actualizacion:') !!}
    <p>{!! $book->updated_at !!}</p>
</div>

