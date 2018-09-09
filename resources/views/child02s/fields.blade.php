<!-- Id Child01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_child01', 'Id Child01:') !!}
    {!! Form::text('id_child01', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('child02s.index') !!}" class="btn btn-default">Cancel</a>
</div>
