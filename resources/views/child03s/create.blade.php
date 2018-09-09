@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Child03
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'child03s.store']) !!}

                        @include('child03s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
