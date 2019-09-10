<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $author->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $author->name !!}</p>
</div>

<!-- Bio Field -->
<div class="form-group">
    {!! Form::label('bio', 'Descripción:') !!}
    <p>{!! $author->bio !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Foto:') !!}
    <p><img src="{!! $author->image !!}" class="img-responsive" width="150px" height="150px"></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fecha creacion:') !!}
    <p>{!! $author->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Fecha actualización:') !!}
    <p>{!! $author->updated_at !!}</p>
</div>

