@extends('layouts.headerFooter')
@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-5">Seu próximo carro está aqui, esperando por você.</h2>

    <div class="card border rounded-3 mb-5 p-4 shadow-sm bg-light">
        <h5 class="mb-4">Filtros de Pesquisa</h5>
        <form id="filtroCarros" class="row g-3" action="search?" method="get">
            <div class="col-md-3">
                <input type="text" name="marca" class="form-control rounded-pill border-0 shadow-sm" placeholder="Marca">
            </div>
            <div class="col-md-3">
                <input type="text" name="modelo" class="form-control rounded-pill border-0 shadow-sm" placeholder="Modelo">
            </div>
            <div class="col-md-2">
                <input type="number" name="ano_min" class="form-control rounded-pill border-0 shadow-sm" placeholder="Ano mínimo">
            </div>
            <div class="col-md-2">
                <input type="number" name="ano_max" class="form-control rounded-pill border-0 shadow-sm" placeholder="Ano máximo">
            </div>
            <div class="col-md-2">
                <input type="number" name="valor_min" class="form-control rounded-pill border-0 shadow-sm" placeholder="Valor mínimo">
            </div>
            <div class="col-md-2">
                <input type="number" name="valor_max" class="form-control rounded-pill border-0 shadow-sm" placeholder="Valor máximo">
            </div>
            <div class="col-md-3">
                <select name="combustivel" class="form-select rounded-pill border-0 shadow-sm">
                    <option value="" selected>Combustível</option>
                    <option value="gasolina">Gasolina</option>
                    <option value="diesel">Diesel</option>
                    <option value="hibrido">Híbrido</option>
                    <option value="eletrico">Elétrico</option>
                </select>
            </div>
            <div class="col-md-3">
                <select name="transmissao" class="form-select rounded-pill border-0 shadow-sm">
                    <option value="" selected>Transmissão</option>
                    <option value="manual">Manual</option>
                    <option value="automatica">Automática</option>
                </select>
            </div>
            <div class="col-md-6 text-end">
                <button type="submit" class="btn btn-danger rounded-pill px-4 mt-2">Filtrar</button>
            </div>
        </form>
    </div>
    @if(!empty($carros) && $carros->count() > 0)
    @foreach($carros as $carro)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $carro->marca }} - {{ $carro->modelo }}</h5>
                <p>Ano: {{ $carro->ano }}</p>
                <p>Preço: R$ {{ number_format($carro->preco, 2, ',', '.') }}</p>
            </div>
        </div>
    @endforeach
    @elseif(request()->hasAny(['marca','modelo','ano_min','ano_max','valor_min','valor_max','combustivel','transmissao']))
        <p class="text-muted">Nenhum carro encontrado. <a href="compras">Ver carros disponíveis</a></p>
    @endif

    @if ($carrosDestaque->count() > 0)
    <h5 class="mb-4">Carros em Destaque</h5>
    <div class="row mb-5">
        @foreach ($carrosDestaque as $carroDestaque)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="/img/{{ $carroDestaque->imagem }}" class="card-img-top" alt="{{ $carroDestaque->marca }} {{ $carroDestaque->modelo }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $carroDestaque->marca }} {{ $carroDestaque->modelo }}</h5>
                    <p class="card-text text-muted">{{ $carroDestaque->ano }} | Preço: R$ {{ number_format($carroDestaque->preco, 2, ',', '.') }}.000</p>
                    <a href="{{ $carroDestaque->id }}" class="btn btn-danger mt-auto rounded-pill">Ver Detalhes</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <!-- LISTA DE CARROS -->
    <h5 class="mb-4">Todos os Carros</h5>
    <div class="row">
        @for ($i = 1; $i <= 9; $i++)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="/img/logo2.png" class="card-img-top" alt="Carro {{ $i }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Carro {{ $i }}</h5>
                    <p class="card-text text-muted">Ano: 202{{ $i }} | Preço: R$ {{ 50*$i }}.000</p>
                    <a href="#" class="btn btn-danger mt-auto rounded-pill">Ver Detalhes</a>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- PAGINAÇÃO -->
    <nav class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link text-danger" href="#">Anterior</a></li>
            <li class="page-item active"><a class="page-link bg-danger border-0" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-danger" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-danger" href="#">3</a></li>
            <li class="page-item"><a class="page-link text-danger" href="#">Próximo</a></li>
        </ul>
    </nav>

</div>

@endsection
