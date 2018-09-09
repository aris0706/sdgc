<table class="table table-responsive" id="list1s-table">
    <thead>
        <th>Title</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($list1s as $list1)
        <tr>
            <td>{!! $list1->title !!}</td>
            <td>
                {!! Form::open(['route' => ['list1s.destroy', $list1->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('list1s.show', [$list1->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('list1s.edit', [$list1->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>