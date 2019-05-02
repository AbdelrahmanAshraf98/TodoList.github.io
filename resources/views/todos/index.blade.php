@if(count($todos)>0)
<?php $counter = 0 ?>
  @foreach($todos as $todo)
  <?php $counter++;?>
  <div class="card bg-light col-lg-4">
    <div class="card-header">
      <h3 class="card-title" style="margin:auto; color:#191966">
        <a href="Todo/{{$todo->id}}" style="text-decoration:none;color:#191966">{{$todo->text}}</a>
      </h3>
    </div>
    <div class="card-body " style="color:#172B4D">
      <p>{{$todo->body}}</p>
      <p style="color:red">{{$todo->deadline}}</p>
      <a href="Todo/{{$todo->id}}" style="text-decoration:none;color:white">
      {!!Form::open(['action' => ['todoscontroller@destroy',$todo->id ],'method'=>"post"])!!}
	     {{ Form::hidden('_method','DELETE') }}
       {{ Form::submit('Done',['class'=>'btn btn-lg btn-block btn-success','style'=>''])}}
       {!! Form::close() !!}
    </div>
  </div>

  @if ($counter % 3 == 0)
      </div>
      <div class="card-deck  text-center " style="color:#172B4D; margin-bottom:50px;">
@endif
  @endforeach
@endif
