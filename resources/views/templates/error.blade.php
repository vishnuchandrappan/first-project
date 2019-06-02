@if(sizeof($errors->all()) > 0)
<div class="alert alert-danger">
  @foreach ($errors->all() as $error)
    <h4> {{$error}} </h4>
  @endforeach
</div>
@endif
