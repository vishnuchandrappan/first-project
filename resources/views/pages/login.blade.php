@extends ('templates.master')

@section ('main-content')
  <div class="container">
    <h2 class="text text-secondary">Login</h2>
    <form class="form form-group" action="/login" method="post">
      {{ csrf_field() }}

      <label>Email</label>
      <input type="email" name="email" placeholder="Eg: john@example.com" class="form-control" required>

      <label>Password</label>
      <input type="password" name="password" class="form-control" required>

      <input type="submit" name="submit" value="Login" class="btn btn-primary">
    </form>

    @include('templates.error')

  </div>
@endsection
