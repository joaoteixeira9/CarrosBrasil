@extends('layouts.headerFooter')
@section('content')
<div class="container mt-5">
        <div class="card mx-auto shadow-sm p-4 text-center">
            @if($usuario->profile_photo_path)
            <div class="d-flex justify-content-center mb-3">
                <img src="/img/user-img/{{ $usuario->profile_photo_path }}"  alt="Foto do usuário" class="img-perfil rounded-circle">
            @else
            <i class="bi bi-person-circle display-1"></i>
            @endif
        </div>
        <h3 class="fw-bold text-uppercase">{{ $usuario->name }}</h3>
        <p class="text-muted">{{ $usuario->email }}</p>
        <label class="text-start">CPF/CNPJ</label>
        <div class="col-md-6">
            @if($usuario->cpf_cnpj)
            <input type="text" class="form-control is-valid" value="{{ $usuario->cpf_cnpj }}" disabled>
            @else
            <input type="text" class="form-control is-invalid" placeholder="CPF/CNPJ não informado" disabled>
            @endif
        </div>
        <label class="text-start mt-2">TELEFONE/CELULAR</label>
        <div class="col-md-6">
            @if($usuario->telefone)
            <input type="text" class="form-control is-valid" value="{{ $usuario->telefone }}" disabled>
            @else
            <input type="text" class="form-control is-invalid" placeholder="Telefone/Celular não informado" disabled>
            @endif
        </div>
        <label class="text-start mt-2">DATA DE NASCIMENTO</label>
        <div class="col-md-6">
            @if($usuario->data_nascimento)
            <input type="date" class="form-control is-valid" value="{{ $usuario->data_nascimento }}" disabled>
            @else
            <input type="date" class="form-control is-invalid" placeholder="Data de Nascimento não informado" disabled>
            @endif
        </div>
        <a href="/user/edit/{{ $usuario->id }}" class="btn btn-danger mt-3 w-25">Editar perfil</a>
    </div>
</div>
@endsection