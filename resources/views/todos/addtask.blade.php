@extends('layouts.app')

@section('content')
      <h2 style="color:white; margin:30px">Add Your Task Now!</h2>

        {!!Form::open(['action' =>'todoscontroller@store','method'=>'post'])!!}
          <div class="form-group" style="margin:20px;color:white">
            {{ Form::label('name','Name')}}
            {{ Form::text('name','',['class'=>'form-control','placeholder' => 'Task Name'])}}
          </div>
          <div class="form-group" style="margin:20px;color:white">
            {{ Form::label('deadline','Deadline')}}
            {{ Form::date('deadline','',['class'=>'form-control'])}}
          </div>
          <div class="form-group" style="margin:20px;color:white;">
            {{ Form::label('body','Description')}}
            {{ Form::textarea('body','',['class'=>'form-control','placeholder' => 'Task Description','style'=>'resize:none','rows'=>'4','maxlength'=>'79'])}}
          </div>
         <div class="form-group" style="margin:20px;color:white;">
           {{ Form::submit('Add',['class'=>'btn btn-success'])}}
         </div>
        {!! Form::close() !!}
@endsection








    <!--<h2 style="color:white; margin:30px">Add Your Task Now!</h2>
    <form class="needs-validation" method="POST" >
        <div class="row">
            <div class="col-md-8 mb-3" style="color:white">
                <label for="firstName">Task</label>
                <input type="text" class="form-control" name="task"
                placeholder="Enter Your Task!" value="" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
             </div>
            <div class="col-md-8 mb-3" style="color:white">
                <label for="deadline">deadline</label>
                <input type="date" class="form-control" name="deadline"
                placeholder="Enter Deadline!" value="" required>
            </div>
            <div class="col-md-8 mb-3" style="color:white">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" name="description"
                placeholder="Enter task Description!" value="" required rows="4"
                style="resize:none" maxlength="87"></textarea>
            </div>
        </div>
        <button class="btn btn-lg btn-success " type="submit">ADD</button>
        @csrf
    </form>-->
