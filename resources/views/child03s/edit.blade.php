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
                   {!! Form::model($child03, ['route' => ['child03s.update', $child03->id], 'method' => 'patch']) !!}

                        @include('child03s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection