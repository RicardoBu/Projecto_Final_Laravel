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
    
      <tr>
        <td>{{ $album->id }}</td>
        <td>{{ $album->nome }}</td>
        <td>{{ $album->source_imagem }}</td>
        <td>{{ $album->data_lancamento }}</td>
        <td>{{ $album->banda_id }}</td>
        
     
        
      </tr>
    
  </tbody>
</table>
@endsection