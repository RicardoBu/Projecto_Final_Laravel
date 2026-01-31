@extends('layouts.fe_master')
@section('content')


 
    <!-- Formulário de adicionar user -->
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">Nome do Album</label>
        <input required name="username" type="text" class="form-control" id="username">
        @error('username')
            <p class="text-danger">Erro no nome do user</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Foto do Album</label>
        <input required name="type" type="file" class="form-control" id="type">
        @error('type')
            <p class="text-danger">Erro no tipo do user</p>
        @enderror
    </div>

    
    

   

    <button type="submit" class="btn btn-success">Adicionar User</button>
</form>
@endsection
