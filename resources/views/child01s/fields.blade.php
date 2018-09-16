<!-- Id List1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'List:') !!}
	<select name="id_list1" class="form-control">
	@if(Request::segment(3)=="edit")
        <option value="{{$child01->id_list1}}">
            {!! App\Helpers\spkHelper::idList($child01->id_list1) !!}
        </option>
    @else
        <option value=""></option>
    @endif
		@foreach($list1 as $item)
		<option value="{{$item->id}}">{{$item->title}}</option>
		@endforeach
	</select>
 </div>

<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::textarea('title', null, ['class' => 'ckeditor','id'=>'ckeditor']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('child01s.index') !!}" class="btn btn-default">Cancel</a>
</div>
