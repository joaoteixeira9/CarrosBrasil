@extends('layouts.headerFooter')
@section('content')
<div class="container mt-5">
    <div class="card mx-auto shadow-sm p-4 text-center" style="max-width: 400px;">
        @if($usuario->foto)
        <img class="img-logo" src="{{ $usuario->foto }}">
        @else
        <i class="bi bi-person-circle display-1"></i>
        @endif
        <h3 class="fw-bold text-uppercase">{{ $usuario->name }}</h3>
        <a href="/profile/edit" class="btn btn-primary mt-3">Editar Perfil</a>
    </div>
</div>
@endsection