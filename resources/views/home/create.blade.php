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

<form action="{{route('home.store')}}"method="POST">
  @csrf
  <label >First name:</label><br>
  <input type="name"  name="name" value="{{old('name')}}"><br>
  <label >conent:</label><br>
  <textarea name="content">{{old('content')}}</textarea>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
@endsection