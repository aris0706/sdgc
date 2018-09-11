<!-- Id Child02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Id Indikator:') !!}
    <select name="id_child02" class="form-control">
    @if(Request::segment(3)=="edit")
    	<option value="{{$child03->id_child02}}">
    		{!! App\Helpers\spkHelper::child02($child03->id_child02) !!}
    	</option>
    @else
    <option value=""></option>
    @endif
    	@foreach($child02 as $item)
    	<option value="{{$item->id}}">{{$item->title}}</option>
    	@endforeach
    </select>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('child03s.index') !!}" class="btn btn-default">Cancel</a>
</div>
