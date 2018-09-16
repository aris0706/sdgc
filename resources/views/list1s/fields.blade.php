<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::textarea('title', null, ['class' => 'ckeditor','id'=>'ckeditor']) !!}
</div>

<!-- subTitle Field -->
<div class="form-group col-sm-12">
    {!! Form::label('subtitle', 'Subtitle:') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('list1s.index') !!}" class="btn btn-default">Cancel</a>
</div>
