@extends('layouts.fe_master')
@section('content')

<h1>Lista de Users</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome da banda</th>
      <th>Source da foto</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td><img src="{{$user->photo? asset('storage/'.$user->source_foto) : asset('images/nophoto.jpg')}}" alt=""></td>
        <td>{{ $user->source_foto }}</td>
        
        <td>
          <a href="{{ route('bandas.albuns', $user->id) }}">Detalhes da banda</a>
        </td>
        <td>
          <a href="{{ route('users.store') }}">Adicionar</a>
          <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Remover</button>
          </form>
        </td>
        
      </tr>
    @endforeach
  </tbody>
</table>
@endsection