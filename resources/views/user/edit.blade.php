@extends('layouts.headerFooter')
@section('content')
<div class="container mt-5">
    <div class="card mx-auto shadow-sm p-4 text-center">
        <form action="/user/confirm-edit/{{ $usuario->id }}" enctype="multipart/form-data" method="post" class="d-flex flex-column">
            @csrf
            @if($usuario->profile_photo_path)
            <div class="mx-auto text-center">
                <img src="/img/user-img/{{ $usuario->profile_photo_path }}" alt="Foto do usuário" class="img-perfil rounded-circle">
            </div>
            <label class="text-center mt-1">IMAGEM DE PERFIL</label>
            <div class="d-flex justify-content-center mb-3">
                <input type="file" name="user_img" accept="image/*" class="form-control w-50">
            </div>
            @else
            <i class="bi bi-person-circle display-1"></i>
            <label class="text-start mt-2">IMAGEM DE PERFIL</label>
            <input type="file" name="user_img" accept="image/*" class="form-control w-50">
            @endif
            
            <h3 class="fw-bold text-uppercase">{{ $usuario->name }}</h3>
            <p class="text-muted">{{ $usuario->email }}</p>
            <label class="text-start">CPF/CNPJ</label>
            <div class="col-md-6">
                @if($usuario->cpf_cnpj)
                <input type="text" id="cpf_cnpj" name="cpf_cnpj" class="form-control" value="{{ $usuario->cpf_cnpj }}">
                <p id="erroCpfCnpj" class ="text-danger text-start ms-1">CPF ou CNPJ inválido! Deve ter entre 11 e 14 dígitos.</p>
                @else
                <input type="text" id="cpf_cnpj" name="cpf_cnpj" class="form-control is-invalid" placeholder="CPF/CNPJ não informado">
                <p id="erroCpfCnpj" class ="text-danger text-start ms-1">CPF ou CNPJ inválido! Deve ter entre 11 e 14 dígitos.</p>
                @endif
            </div>
            <label class="text-start mt-2">TELEFONE/CELULAR</label>
            <div class="col-md-6">
                @if($usuario->telefone)
                <input type="text" id="telefone" name="telefone" class="form-control" value="{{ $usuario->telefone }}">
                <p id="erroTel" class ="text-danger text-start ms-1">Telefone/Celular inválido! Deve ter entre 10 e 11 dígitos.</p>
                @else
                <input type="text" id="telefone" name="telefone" class="form-control is-invalid" placeholder="Telefone/Celular não informado">
                <p id="erroTel" class ="text-danger text-start ms-1">Telefone/Celular inválido! Deve ter entre 10 e 11 dígitos.</p>
                @endif
            </div>
            <label class="text-start mt-2">DATA DE NASCIMENTO</label>
            <div class="col-md-6">
                @if($usuario->data_nascimento)
                <input type="date" name="data_nascimento" class="form-control" value="{{ $usuario->data_nascimento }}">
                @else
                <input type="date" name="data_nascimento" class="form-control is-invalid" placeholder="Data de Nascimento não informado">
                @endif
            </div>
            <button type="submit" id="btn-confirmar" class="btn btn-success mt-3 w-25">Confirmar edição</button>
        </form>
    </div>
</div>
<script src="{{ asset('js/u-formatarCampos.js') }}"></script>
@endsection