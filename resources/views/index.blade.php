<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<h1><a href="home/create">create a new one</a></h1>

<table>
  <tr>
    <th>name</th>
    <th>Content</th>
    <th>edit</th>
    <th>show</th>
    <th>delete</th>
  </tr>
  @foreach($test as $date)
  <tr>
    <td>{{$date->name}}</td>
    <td>{{$date->content}}</td>
    <td>
        <a href="home/{{$date->id}}/edit">edit</a>
    </td>
    <td>
        <a href="home/{{$date->id}}">show</a>
    </td>
    <td>
        <form action="{{route("home.destroy",['home'=>$date->id])}}"method="POST">
            @csrf
            @method("DELETE")
            <input type="submit" value="Delete">
        </form>
    </td>
    
  </tr>
  @endforeach
</table>

</body>
</html>