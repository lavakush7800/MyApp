<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> Student Data</h2>        
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>UPDATE
        </th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $data)
      <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->password }}</td>
        <td>
        <form method="post" action="update">
        <input type="hidden"  name="id" value="{{ $data->id }}">
        @csrf
        <button>Update</button>
        </form>
        </td>
        <td>
        <form method="post" action="delete">
        <input type="hidden"  name="id" value="{{ $data->id }}">
        @csrf
        <button>Delete</button>
        </form>
        </td>
      </tr>

    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
