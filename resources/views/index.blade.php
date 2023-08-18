<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>A basic HTML table</h2>

<table style="width:100%">

    <h1><a href="example/create">create a new one</a></h1>
  <tr>
    <th>name</th>
    <th>content</th>
    <th>action</th>
  </tr>
  @foreach ($test as $date)    
  <tr>
    <td>{{$date->name}}</td>
    <td>{{$date->content}}</td>
    <td><a href="example/{{$date->id}}/edit">edit</a></td>
    <td><a href="example/{{$date->id}}">show</a></td>
    <td> <form action="{{route('example.destroy',['example'=>$date->id])}}" method="POST">
        @csrf
        @method("delete")
        <input type="submit" value="delete">
    </form></td>
    </tr>
    
  @endforeach
</table>

</body>
</html>