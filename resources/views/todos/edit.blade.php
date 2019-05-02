@extends('layouts.app')

@section('content')
  {!!Form::open(['action' => ['todoscontroller@update',$todo->id ],'method'=>'post'])!!}
    <div class="form-group" style="margin:20px;color:white">
      {{ Form::label('name','Name')}}
      {{ Form::text('name',$todo->text,['class'=>'form-control','placeholder' => $todo->text])}}
    </div>
    <div class="form-group" style="margin:20px;color:white">
      {{ Form::label('deadline','Deadline')}}
      {{ Form::date('deadline',$todo->deadline,['class'=>'form-control','placeholder' => $todo->deadline])}}
    </div>
    <div class="form-group" style="margin:20px;color:white;">
      {{ Form::label('body','Description')}}
      {{ Form::textarea('body',$todo->body,['class'=>'form-control','placeholder' => $todo->body,'style'=>'resize:none','rows'=>'4','maxlength'=>'79'])}}
    </div>
   {{ Form::hidden('_method','PUT') }}
   <div class="form-group" style="margin:20px;color:white;">
     {{ Form::submit('update',['class'=>'btn btn-success'])}}
   </div>
  {!! Form::close() !!}

@endsection
