@extends('layouts.fe_master')
@section('content')

<h1>Lista de Bandas</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome da banda</th>
      <th> Foto</th>
      <th>Albuns da banda</th>
      <th>Acoes</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($bandas as $banda)
      <tr>
        <td>{{ $banda->id }}</td>
        <td>{{ $banda->nome }}</td>
        <td><img src="{{$banda->photo? asset('storage/'.$banda->source_foto) : asset('images/nophoto.jpg')}}" alt=""></td>
        <td>{{ $banda->source_foto }}</td>
        
        <td>
          <button><a href="{{ route('bandas.ver_albuns_banda_id', $banda->id) }}">Ver albuns da banda</a></button>
          
        </td>
        <td>
          <a href="{{ route('bandas.add_banda') }}">Adicionar</a>
          <form action="{{ route('bandas.destroy', $banda->id) }}" method="POST">
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