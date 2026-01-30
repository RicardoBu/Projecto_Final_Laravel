@extends('layouts.fe_master')
@section('content')

  <!-- Formulário de editar album -->
<form method="POST" action="{{ route('albuns.update', $album->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome_prenda" class="form-label">Nome do Album</label>
        <input required name="nome_prenda" type="text" class="form-control" id="nome_prenda" value="{{ old('nome_prenda', $album->nome_prenda) }}">
        @error('nome_prenda')
            <p class="text-danger">Erro no nome do album</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="valor_previsto" class="form-label">Source da imagem</label>
        <input required name="valor_previsto" type="number" step="0.01" class="form-control" id="valor_previsto">
        @error('valor_previsto')
            <p class="text-danger">Erro no src</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="valor_gasto" class="form-label">Data de lançamento</label>
        <input name="valor_gasto" type="number" step="0.01" class="form-control" id="valor_gasto">
        @error('valor_gasto')
            <p class="text-danger">Erro na data de lançamento</p>
        @enderror
    </div>

    <!-- <div class="mb-3">
        <label for="user_id" class="form-label">Pessoa Recebedora</label>
        <select name="user_id" id="user_id" class="form-select" required>
            <option value="">-- Selecionar Utilizador --</option>
            @foreach($prendas as $prenda)
                <option value="{{ $prenda->id }}">{{ $prenda->name }}</option>
            @endforeach
        </select>
        @error('user_id')
            <p class="text-danger">Selecione um usuário</p>
        @enderror
    </div> -->

    <button type="submit" class="btn btn-success">Editar Album</button>
</form>
@endsection
