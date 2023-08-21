<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('home.store')}}"method="POST">
  @csrf
  <label >First name:</label><br>
  <input type="name"  name="name" ><br>
  <label >conent:</label><br>
  <textarea name="content"></textarea>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
