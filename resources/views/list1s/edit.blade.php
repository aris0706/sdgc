@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            List1
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($list1, ['route' => ['list1s.update', $list1->id], 'method' => 'patch']) !!}

                        @include('list1s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection