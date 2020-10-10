@extends('layouts.master')
@section('title','Home')
@section('content')

<div class="container">
  <div class="row">
     <div class="col-md-12">
        
<div class="container">
  <h2 style="text-align: center">Login Data</h2>        
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
     </div>
  </div>
</div>

@endsection
 