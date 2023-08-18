<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>show page</h2>

<table style="width:100%">
  <tr>
    <th>name</th>
    <th>content</th>
    <th>action</th>
  </tr>

  <tr>
    <td>{{$test->name}}</td>
    <td>{{$test->content}}</td>
    <td><a href="/example/{{$test->id}}/edit">edit</a>
    </td>
    <td>
       g
    </td>
  </tr>
  

</table>

</body>
</html>