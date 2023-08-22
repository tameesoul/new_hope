@extends('index')
@section('content')
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
    <th>delete</th>
  </tr>
  <tr>
    <td>{{$test->name}}</td>
    <td>{{$test->content}}</td>
    <td>
        <a href="/home/{{$test->id}}/edit">edit</a>
    </td>
    <td>
        <form action="{{route("home.destroy",['home'=>$test->id])}}"method="POST">
            @csrf
            @method("DELETE")
            <input type="submit" value="Delete">
        </form>
    </td>
  </tr>
</table>

</body>
</html>
@endsection('content')