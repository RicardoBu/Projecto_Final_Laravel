@extends('layouts.fe_master')
@section('content')


 
    <!-- Formulário de adicionar banda -->
<form method="POST" action="{{ route('bandas.store') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome da banda</label>
        <input required name="nome" type="text" class="form-control" id="username">
        @error('username')
            <p class="text-danger">Erro no nome da banda</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Foto da banda</label>
        <input required name="src_foto" type="file" class="form-control" id="src_foto">
        @error('src_foto')
            <p class="text-danger">Erro na foto da banda</p>
        @enderror
    </div>

    


    <button type="submit" class="btn btn-success">Adicionar User</button>
</form>
@endsection
