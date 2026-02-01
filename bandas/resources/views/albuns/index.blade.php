@extends('layouts.fe_master')
@section('content')

<h1>Lista de Albuns</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome do album</th>
      <th>Source da imagem</th>
      <th>Data de lançamento</th>
      <th>Banda ID</th>
      <th>Detalhes</th>
      <th>Acoes</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($albuns as $album)
      <tr>
        <td>{{ $album->id }}</td>
        <td>{{ $album->nome }}</td>
        <td><img 
        src="{{ $album->src_imagem
            ? asset('storage/albuns/' . $album->src_imagem)
            : asset('storage/nophoto.jpg') }}"
        width="100"
        alt="Foto da banda"
    ></td>
        <td>{{ $album->source_imagem }}</td>
        <td>{{ $album->data_lancamento }}</td>
        <td>{{ $album->banda_id }}</td>
        <td>
          <a href="{{ route('albuns.ver_album_id', $album->id) }}">Ver</a>
        </td>
        <td>
           @if(auth()->check() && auth()->user()->type === 'admin')
          <a href="{{ route('albuns.add_album') }}" class="btn btn-primary">Adicionar </a>
          <a href="{{ route('albuns.update', $album->id) }}" class="btn btn-warning">Editar</a>
          <form action="{{ route('albuns.destroy', $album->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Remover</button>


            @endif

          @if(auth()->check() && auth()->user()->type === 'user')
          <a href="{{ route('bandas.update', $album->id) }}" class="btn btn-warning">Editar</a>
          @endif
          </form>
          
        </td>
        
      </tr>
    @endforeach
  </tbody>
</table>
@endsection