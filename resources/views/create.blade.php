<!DOCTYPE html>
<html>
<body>

<form action="{{route('example.store')}}" method= "POST">
    @csrf
    <input type="text" placeholder="name" name="name">
    <textarea name="content" placeholder="content"></textarea>

  <input type="submit" value="Submit">
</form> 
</body>
</html>