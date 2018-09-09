<table class="table table-responsive" id="child01s-table">
    <thead>
        <th>List ID</th>
        <th>Title</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($child01s as $child01)
        <tr>
            <td>{!! $child01->id_list1 !!}
            {!! App\Helpers\spkHelper::list($child01->id_list1) !!}
            </td>
            <td>{!! $child01->title !!}</td>
            <td>
                {!! Form::open(['route' => ['child01s.destroy', $child01->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('child01s.show', [$child01->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('child01s.edit', [$child01->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>