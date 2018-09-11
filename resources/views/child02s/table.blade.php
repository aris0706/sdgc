<table class="table table-responsive" id="child02s-table">
    <thead>
        <th>Id Target</th>
        <th>Title</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($child02s as $child02)
        <tr>
            <td>{!! $child02->id_child01 !!}
            {!! App\Helpers\spkHelper::child01($child02->id_child01) !!}
            </td>
            <td>{!! $child02->title !!}</td>
            <td>
                {!! Form::open(['route' => ['child02s.destroy', $child02->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('child02s.show', [$child02->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('child02s.edit', [$child02->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>