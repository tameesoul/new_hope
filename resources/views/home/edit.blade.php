@extends('index')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('home.update',['home'=>$test->id])}}"method="POST">
  @csrf
  @method("PUT")
  <label >First name:</label><br>
  <input type="name"name="name"value="{{$test->name}}"><br>
  <label >conent:</label><br>
  <textarea name="content">{{$test->content}}</textarea>
  <input type="submit" value="UPDATE">
</form> 
</body>
</html>
@endsection('content')