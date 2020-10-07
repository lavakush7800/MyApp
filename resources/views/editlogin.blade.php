<!DOCTYPE html>
<html lang="en">                                   
<head>
  <title>Login Page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">

 
    <h3 style="text-align: center;">student page</h3>
  <form method="post" action="edit">

   <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" value="{{ $data[0]->name }}" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="{{ $data[0]->email }}" name="email">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="text" class="form-control" id="password" value="{{ $data[0]->password }}" name="password">
    </div>

    <input type="hidden"   value="{{ $data[0]->id }}" name="id">
    @csrf
    <input type="submit" value="submit" name="submit" class="btn btn-secondary btn-sm btn-block"/>
  </form>
     
  
</div>

</body>
</html>
