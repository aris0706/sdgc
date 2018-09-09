@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Child02
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($child02, ['route' => ['child02s.update', $child02->id], 'method' => 'patch']) !!}

                        @include('child02s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection