

@extends('layouts.fe_master')
@section('content')
    
    <!-- Formulário de editar user -->
<form method="POST" action="{{ route('users.update',  $user->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Username</label>
        <input required name="username" type="text" class="form-control" id="username" value="{{ $user->nome }}">
        @error('username')
            <p class="text-danger">Erro no username</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Tipo de user</label>
        <input required name="type" type="text" class="form-control" id="type" value="{{ $user->type }}">
        @error('type')
            <p class="text-danger">Erro no tipo de user</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Email</label>
        <input required name="email" type="text" class="form-control" id="email" value="{{ $user->email }}">
        @error('email')
            <p class="text-danger">Erro no email</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Password</label>
        <input required name="password" type="password" class="form-control" id="password" value="{{ $user->password }}">
        @error('password')
            <p class="text-danger">Erro na password</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Editar User</button>
</form>
@endsection
