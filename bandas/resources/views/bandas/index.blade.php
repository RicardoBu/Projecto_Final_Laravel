@extends('layouts.fe_master')
@section('content')

<h1>Lista de Bandas</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome da banda</th>
      <th> Foto</th>
      <th>Numero de albuns</th>
      <th>Mais detalhes</th>
      <th>Acoes</th>
      
    </tr>
  </thead>
  <tbody>
    
    @foreach($bandas as $banda)
      <tr>
        <td>{{ $banda->id }}</td>
        <td>{{ $banda->nome }}</td>
       <td>
    <img 
        src="{{ $banda->src_foto
            ? asset('storage/' . $banda->src_foto)
            : asset('storage/nophoto.jpg') }}"
        width="100"
        alt="Foto da banda"
    >
</td>
<td>{{ $banda->albuns_count }}</td>


<!-- <td>{{ $banda->src_foto }}</td> -->

        
        <td>
          <button><a href="{{ route('bandas.ver_albuns_banda_id', $banda->id) }}">Ver albuns da banda</a></button>

          
        </td>
        <td>
          @if(auth()->check() && auth()->user()->type === 'admin')
          
          <a href="{{ route('bandas.edit', $banda->id) }}" class="btn btn-warning">Editar</a>
          
          <form action="{{ route('bandas.destroy', $banda->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Remover</button>
            @endif

            @if(auth()->check() && auth()->user()->type === 'user')
          <a href="{{ route('bandas.edit', $banda->id) }}" class="btn btn-warning">Editar</a>
          @endif

           


          </form>
        </td>
        
      </tr>
    @endforeach
  </tbody>
</table>
@if(auth()->check() && auth()->user()->type === 'admin')
<a href="{{ route('bandas.create') }}" class="btn btn-primary">Adicionar Banda </a>
@endif
@endsection