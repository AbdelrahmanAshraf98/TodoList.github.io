<div class="card bg-light col-lg-4">
  <div class="card-header">
    <h3 class="card-title" style="margin:auto; color:#191966">{{$todo->text}}</h3>
  </div>
  <div class="card-body " style="color:#172B4D">
    <p>{{$todos->body}}</p>
    <p style="color:#172B4D">{{$todos->date}}</p>
    <button type="button" class="btn btn-lg btn-block btn-warning">DONE</button>
  </div>
</div>
