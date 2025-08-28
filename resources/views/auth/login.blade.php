<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Carros Brasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="/img/logo4.ico" type="image/x-icon">
</head>
<body class="bg-light min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6 bg-danger text-white p-5 d-flex flex-column justify-content-center">
                            <div class="text-center">
                                <img src="/img/logo4.png" alt="Logo Carros Brasil" class="img-fluid mb-4">
                                <h1 class="fw-bold mb-3">Carros Brasil</h1>
                                <p class="lead mb-4">O melhor portal automotivo do país</p>
                                <div class="mt-5 pt-4">
                                    <p class="mb-2">Não tem uma conta ainda?</p>
                                    <a href="/register" class="btn btn-outline-light rounded-pill">Criar Conta</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 bg-white p-5 d-flex flex-column justify-content-center">
                            <div class="w-100">
                                <h2 class="fw-bold mb-1 text-dark">Acesse sua conta</h2>
                                <p class="text-muted mb-4">Entre com suas credenciais para acessar o sistema.</p>
                                <x-validation-errors class="mb-4 text-danger"/>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-semibold">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-danger"></i></span>
                                            <input type="email" class="form-control border-start-0" id="email" name="email" placeholder="Digite seu email" required>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label fw-semibold">Senha</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock text-danger"></i></span>
                                            <input type="password" class="form-control border-start-0" id="password" name="password" placeholder="Digite sua senha" required>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mb-4">
                                        <button type="submit" class="btn btn-danger btn-lg rounded-3 fw-semibold py-2">Entrar</button>
                                    </div>
                                </form>
                                <div class="text-center mb-4">
                                    <span class="text-muted">Não tem conta?</span>
                                    <a href="/register" class="text-danger text-decoration-none fw-semibold ms-1">Registrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="text-center mt-4 text-muted">
                    <p>&copy; 2025 Carros Brasil. Todos os direitos reservados.</p>
                </footer>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>