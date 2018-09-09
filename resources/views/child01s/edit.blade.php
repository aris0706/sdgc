@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Child01
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($child01, ['route' => ['child01s.update', $child01->id], 'method' => 'patch']) !!}

                        @include('child01s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection