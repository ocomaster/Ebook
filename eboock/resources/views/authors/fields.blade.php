<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bio Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bio', 'Descripción:') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control','id'=>"editor"]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Foto:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('authors.index') !!}" class="btn btn-default">Cancelar</a>
</div>
