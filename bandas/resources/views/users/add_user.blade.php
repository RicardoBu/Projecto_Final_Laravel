@extends('layouts.fe_master')
@section('content')


 
    <!-- Formulário de adicionar user -->
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">Nome do User</label>
        <input required name="username" type="text" class="form-control" id="username">
        @error('username')
            <p class="text-danger">Erro no nome do user</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo de User</label>
        <input required name="type" type="text" class="form-control" id="type">
        @error('type')
            <p class="text-danger">Erro no tipo do user</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input required  name="email" type="email" step="0.01" class="form-control" id="email">
        @error('email')
            <p class="text-danger">Erro no email</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input required  name="password" type="password"  class="form-control" id="password">
        @error('password')
            <p class="text-danger">Erro na password</p>
        @enderror
    </div>

    

   

    <button type="submit" class="btn btn-success">Adicionar User</button>
</form>
@endsection
