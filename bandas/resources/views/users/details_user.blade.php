@extends('layouts.fe_master')
@section('content')

<h1>Detalhes  do User</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Tipo</th>
      <th>Username</th>
      <th>Email</th>
      
      
    </tr>
  </thead>
  <tbody>
    
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->type }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        
        
       
        
      </tr>
    
  </tbody>
</table>
@endsection