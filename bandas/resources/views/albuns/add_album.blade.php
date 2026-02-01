@extends('layouts.fe_master')
@section('content')


 
    <!-- Formulário de adicionar user -->
<form method="POST" action="{{ route('albuns.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome do Album</label>
        <input required name="nome" type="text" class="form-control" id="nome">
        @error('nome')
            <p class="text-danger">Erro no nome do album</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Foto do Album</label>
        <input required name="src_imagem" type="file" class="form-control" id="type">
        @error('src_imagem')
            <p class="text-danger">Erro na foto do album</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Data de lançamento</label>
        <input required name="data_lancamento" type="date" class="form-control" id="data_lancamento">
        @error('data_lancamento')
            <p class="text-danger">Erro na data de lançamento</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Banda Id</label>
        <input required name="banda_id" type="number" class="form-control" id="type">
        @error('banda_id')
            <p class="text-danger">Erro na banda id</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Adicionar Album</button>
</form>
@endsection
