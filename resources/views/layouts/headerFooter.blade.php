<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="/img/logo4.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <title>Carros Brasil</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="position-relative">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm py-2">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a href="/" class="img-logo">
                        <img src="/img/logo3.png" alt="Logo Carros Brasil" class="img-fluid">
                    </a>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#">Carros</a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#">Sobre</a></li>
                    </ul>
                    <form class="d-flex justify-content-center w-100" role="search">
                        <div class="input-group w-50">
                            <input type="search" class="form-control rounded-start-pill" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn btn-dark px-3 rounded-end-pill" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                    @if(Auth::check())
                        <div class="dropdown ms-3 w-50">
                            <button class="w-100 btn btn-dark text-capitalize" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Configurações</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Sair</button>
                                </form>
                            </ul>
                        </div>
                    @else
                        <div class="d-flex justify-content-end w-50 ms-3 align-items-center">
                            <a href="/login" class="btn btn-dark">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Login
                            </a>
                            <a href="/register" class="btn btn-outline-dark ms-2">
                                <i class="bi bi-person-plus me-1"></i> Registrar
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-light text-dark mt-5 pt-5 pb-3">
        <div class="container">
            <div class="text-center mb-4">
                <a href="/" class="d-inline-block">
                    <img src="/img/logo3.png" alt="Logo Carros Brasil" class="img-logo">
                </a>
            </div>
            <div class="row text-center text-md-start mb-4">
                <div class="col-12 col-md-3 mb-3">
                    <h6 class="fw-bold">Institucional</h6>
                    <ul class="list-unstyled">
                    <li><a href="#" class="text-dark text-decoration-none">Sobre nós</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Trabalhe conosco</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <h6 class="fw-bold">Serviços</h6>
                    <ul class="list-unstyled">
                    <li><a href="#" class="text-dark text-decoration-none">Comprar carro</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Vender carro</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Financiamento</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <h6 class="fw-bold">Ajuda</h6>
                    <ul class="list-unstyled">
                    <li><a href="#" class="text-dark text-decoration-none">Central de ajuda</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Política de Privacidade</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Termos de Uso</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <h6 class="fw-bold">Siga-nos</h6>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <a href="#" class="text-dark fs-4"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-dark fs-4"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark fs-4"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="text-dark fs-4"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="text-center border-top pt-3">
                <p class="mb-0">© 2025 Carros Brasil. Todos os direitos reservados.</p>
                <small>CNPJ: 00.000.000/0001-00 - Americana/SP</small>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>