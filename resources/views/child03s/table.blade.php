<table class="table table-responsive" id="child03s-table">
    <thead>
        <th>Id Child02</th>
        <th>Title</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($child03s as $child03)
        <tr>
            <td>{!! $child03->id_child02 !!}</td>
            <td>{!! $child03->title !!}</td>
            <td>
                {!! Form::open(['route' => ['child03s.destroy', $child03->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('child03s.show', [$child03->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('child03s.edit', [$child03->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>