@extends('templates.master')

@section ('main-content')
  <div class="container">
    <h1 class="text text-secondary">Register your account</h1>
    <form class="form form-group" action="/register" method="post">
      {{ csrf_field() }}
      <label>Name</label>
      <input type="text" name="name" placeholder="Eg: John Doe" class="form-control" required>

      <label>Email</label>
      <input type="email" name="email" placeholder="Eg: john@example.com" class="form-control" required>

      <label>Password</label>
      <input type="password" id="password" name="password" class="form-control" required>

      <label>Retype Password</label>
      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>

      <input type="submit" id="submit" name="submit" class="btn btn-primary" value="register" disabled>

      <div class="error-message">
        @include ('templates.error')
      </div>
    </form>
  </div>
@endsection

@section ('sub-content')
<script>

  function enableBtn(){
    $('#submit').removeAttr('disabled');
    $('.error-message').html("");
  }

  function disableBtn(){
    $('#submit').attr('disabled',true);
    $('.error-message').html("<h2 class='alert alert-danger'>Passwords do not Match</h2>");
  }

  $('#password_confirmation').keyup(function(){

    if ($('#password').val()) {
      if ($('#password').val() === $('#password_confirmation').val()) {
        enableBtn();
      }
      else{
        disableBtn();
      }
    }
    else {
      disableBtn();
    }

  });
  $('#password').keyup(function(){

    if ($('#password_confirmation').val()) {
      if ($('#password').val() === $('#password_confirmation').val()) {
        enableBtn();
      }
      else{
        disableBtn();
      }
    }
  });
</script>
@endsection
