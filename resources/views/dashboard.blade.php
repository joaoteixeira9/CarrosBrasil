@extends('layouts.headerFooter')
@section('content')
<div class="container text-center mt-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-lg rounded-4 h-100 p-4 text-center border-0 hover-scale">
                <i class="bi bi-cart-fill display-2 mb-3 text-danger"></i>
                <h5 class="fw-bold mb-3">Compras</h5>
                <p>Explore os melhores carros disponíveis para compra.</p>
                <button class="btn btn-danger btn-lg mt-3">Entrar</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg rounded-4 h-100 p-4 text-center border-0 hover-scale">
                <i class="bi bi-box-seam display-2 mb-3 text-danger"></i>
                <h5 class="fw-bold mb-3">Vendas</h5>
                <p>Liste seus carros e encontre compradores interessados.</p>
                <button class="btn btn-danger btn-lg mt-3">Entrar</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg rounded-4 h-100 p-4 text-center border-0 hover-scale">
                <i class="bi bi-cash-coin display-2 mb-3 text-danger"></i>
                <h5 class="fw-bold mb-3">Leilões</h5>
                <p>Participe de leilões e faça ofertas em tempo real.</p>
                <button class="btn btn-danger btn-lg mt-3">Ver Leilões</button>
            </div>
        </div>
    </div>
</div>
@endsection