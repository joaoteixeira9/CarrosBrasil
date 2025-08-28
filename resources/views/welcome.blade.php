@extends('layouts.headerFooter')
@section('content')
<div class="container-fluid img-bg text-white text-center py-5 d-flex flex-column justify-content-center">
    <h1 class="display-5 fw-bold">Encontre o seu carro perfeito</h1>
    <p class="lead fade-in">Explore, compare e faça a sua escolha com segurança</p>
    <div class="mt-3">
        <a href="/login" class="btn btn-light btn-md me-2 fade-in">Entrar</a>
        <a href="/register" class="btn btn-outline-light btn-md fade-in">Cadastrar</a>
    </div>
</div>
<div class="container text-center mt-5">
    <div class="row g-4">
        <div class="col-md-4">
            <i class="bi bi-car-front-fill display-3 text-danger"></i>
            <h5 class="mt-3">Carros Novos</h5>
            <p>Confira os lançamentos mais recentes disponíveis para você.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-cash-stack display-3 text-success"></i>
            <h5 class="mt-3">Preços Competitivos</h5>
            <p>Ofertas e condições que cabem no seu bolso.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-shield-check display-3 text-danger"></i>
            <h5 class="mt-3">Compra Segura</h5>
            <p>Transações confiáveis e transparentes para você.</p>
        </div>
    </div>
</div>
@endsection