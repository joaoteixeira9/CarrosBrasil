<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Carros Brasil</title>
</head>
<header class="position-relative">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Carros</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Sobre</a></li>
                </ul>

                <form class="d-flex ms-auto" role="search">
                    <div class="input-group">
                        <input type="search" class="form-control rounded-start-pill" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-dark px-3 rounded-end-pill" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <a href="/" class="position-absolute start-50 translate-middle">
        <img src="/img/logo3.png" alt="Logo Carros Brasil" class="img-fluid">
    </a>
</header>


<body>
    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>