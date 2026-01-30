@extends('layouts.fe_master')
@section('content')

<h1>Detalhes  dos Albuns da Banda Id</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome do album</th>
      <th>Source da imagem</th>
      <th>Data de lançamento</th>
      <th>Banda ID</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($albuns as $album)
      <tr>
        <td>{{ $album->id }}</td>
        <td>{{ $album->nome }}</td>
        <td>{{ $album->source_imagem }}</td>
        <td>{{ $album->data_lancamento }}</td>
        <td>{{ $album->banda_id }}</td>
        
        <td>
          <a href="{{ route('albuns.ver_album_id', $album->id) }}">Ver</a>
        </td>
        <td>
          <a href="{{ route('albuns.store') }}">Adicionar</a>
          <form action="{{ route('albuns.destroy', $album->id) }}" method="POST">
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