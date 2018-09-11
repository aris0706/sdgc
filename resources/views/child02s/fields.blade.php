<!-- Id Child01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Id Target:') !!}
    <select name="id_child01" class="form-control">
    @if(Request::segment(3)=="edit")
    	<option value="{{$child02->id_child01}}">
            {!! App\Helpers\spkHelper::child01($child02->id_child01) !!}
    	</option>
    @else
    	<option value=""></option>
    @endif
    	@foreach($child01 as $item)
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
    <a href="{!! route('child02s.index') !!}" class="btn btn-default">Cancel</a>
</div>
