<li class="{{ Request::is('list1s*') ? 'active' : '' }}">
    <a href="{!! route('list1s.index') !!}"><i class="fa fa-arrow-right"></i><span>List</span></a>
</li>


<li class="{{ Request::is('child01s*') ? 'active' : '' }}">
    <a href="{!! route('child01s.index') !!}"><i class="fa fa-arrow-right"></i><span>Target</span></a>
</li>

<li class="{{ Request::is('child02s*') ? 'active' : '' }}">
    <a href="{!! route('child02s.index') !!}"><i class="fa fa-arrow-right"></i><span>Indicator</span></a>
</li>

<li class="{{ Request::is('child03s*') ? 'active' : '' }}">
    <a href="{!! route('child03s.index') !!}"><i class="fa fa-arrow-right"></i><span>Fact & Figures</span></a>
</li>

