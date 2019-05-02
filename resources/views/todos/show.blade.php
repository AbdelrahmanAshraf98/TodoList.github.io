@extends('layouts.app')

@section('content')
  <div class="jumbotron" style="margin-top:40px;padding:50px">
    <h1>{{$todo->text}}</h1>
    <div class="progress">
      <div class="progress-bar bg-success" style="padding:0;width:100px" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        {{$todo->deadline}}
      </div>
    </div>
    <hr>
    <p style="font-size:20px;">{{$todo->body}}</p>
    </div>
    <div class="row">
    <a href="Todo/{{$todo->id}}" style="text-decoration:none;color:white;margin-left:14px">
    {!!Form::open(['action' => ['todoscontroller@edit',$todo->id ],'method'=>"get"])!!}
      {{ Form::submit('edit',['class'=>'btn btn-warning'])}}
    {!! Form::close() !!}
    <a href="Todo/{{$todo->id}}" style="text-decoration:none;color:white;margin-left:20px">
    {!!Form::open(['action' => ['todoscontroller@destroy',$todo->id ],'method'=>"post"])!!}
     {{ Form::hidden('_method','DELETE') }}
     {{ Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
    </div>
@endsection
