<li class="{{ Request::is('list1s*') ? 'active' : '' }}">
    <a href="{!! route('list1s.index') !!}"><i class="fa fa-edit"></i><span>list1s</span></a>
</li>


<li class="{{ Request::is('child01s*') ? 'active' : '' }}">
    <a href="{!! route('child01s.index') !!}"><i class="fa fa-edit"></i><span>Child01s</span></a>
</li>

<li class="{{ Request::is('child02s*') ? 'active' : '' }}">
    <a href="{!! route('child02s.index') !!}"><i class="fa fa-edit"></i><span>Child02s</span></a>
</li>

<li class="{{ Request::is('child03s*') ? 'active' : '' }}">
    <a href="{!! route('child03s.index') !!}"><i class="fa fa-edit"></i><span>Child03s</span></a>
</li>

