@extends('templates.master')

@section('main-content')
  <div class="container">
    <h1 class="text text-secondary">Create new</h1>
    <form action="/posts" method="POST" class="form form-group">
      {{ csrf_field() }}
      <label for="">Title</label>
      <input type="text" name="title" class="form-control">
      <label for="">Body</label>
      <textarea name="body" rows="8" cols="80" class="form-control"></textarea>
      <input type="submit" name="submit" value="Publish" class="btn btn-primary">
    </form>
  </div>
  @include ('templates.error')
@endsection
