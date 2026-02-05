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
      
        <td><img 
        src="{{ $album->src_imagem
            ? asset('storage/' . $album->src_imagem)
            : asset('storage/nophoto.jpg') }}"
        width="100"
        alt="Foto da banda"
    ></td>
        <td>{{ $album->data_lancamento }}</td>
        <td>{{ $album->banda_id }}</td>
       
        
      </tr>
    @endforeach
  </tbody>
</table>
@endsection