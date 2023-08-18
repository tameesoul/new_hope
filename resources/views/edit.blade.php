<!DOCTYPE html>
<html>
<body>
<form action="{{route('example.update',['example'=>$test->id])}}" method= "POST">
    @csrf
    @method('put')
    <input type="text" placeholder="name" name="name" value="{{$test->name}}">
    <textarea name="content" placeholder="content">{{$test->content}}</textarea>
  <input type="submit" value="Submit">
</form> 
</body>
</html>