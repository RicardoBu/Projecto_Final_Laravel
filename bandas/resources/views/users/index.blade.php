@extends('layouts.fe_master')
@section('content')

<h1>Lista de Users</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Tipo</th>
      <th>Username</th>
      <th>Email</th>
      <th>Detalhes</th>
      <th>Acoes</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->type }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        
        <td>
          <a href="{{ route('users.details_user', $user->id) }}" >Detalhes do user</a>
        </td>
        <td>
          <a href="{{ route('users.add_user') }}" class="btn btn-primary">Adicionar </a>
          <a href="{{ route('users.update', $user->id) }}" class="btn btn-warning">Editar</a>
          <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Remover</button>
          </form>
        </td>
        
      </tr>
    @endforeach
  </tbody>
</table>
@endsection