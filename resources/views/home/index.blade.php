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
    <th>show</th>
    <th>delete</th>
    <th>created_At</th>
    <th>updated_At</th>
  </tr>
  @foreach($tests as $test)
  <tr>
    <td>{{$test->name}}</td>
    <td>{{$test->content}}</td>
    <td>
        <a href="home/{{$test->id}}/edit">edit</a>
    </td>
    <td>
        <a href="home/{{$test->id}}">show</a>
    </td>
    <td>
        <form action="{{route("home.destroy",['home'=>$test->id])}}"method="POST">
            @csrf
            @method("DELETE")
            <input type="submit" value="Delete">
        </form>
    </td> 
    {{-- <td>
        <form action="{{route("home.forceDelete",['home'=>$test->id])}}"method="POST">
            @csrf
            <input type="submit" value="forceDelete">
        </form>
    </td>  --}}

    <td>{{$test->created_at}}</td>
    <td>{{$test->updated_at}}</td>
    <td>{{$test->deleted_at}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
    
@endsection