<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Carros Brasil</title>
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
                                <p class="lead mb-4">Junte-se à maior comunidade automotiva do país</p>
                                <div class="mt-5 pt-4">
                                    <p class="mb-2">Já tem uma conta?</p>
                                    <a href="/login" class="btn btn-outline-light rounded-pill">Fazer Login</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 bg-white p-5">
                            <div class="w-100">
                                <h2 class="fw-bold mb-1 text-dark">Criar Conta</h2>
                                <p class="text-muted mb-4">Preencha os dados abaixo para registrar-se</p>
                                <x-validation-errors class="mb-4 text-danger" />
                                <div class="alert alert-danger mb-4 d-none" id="validationErrors">
                                    <ul class="mb-0" id="errorsList"></ul>
                                </div>
                                <form method="POST" action="/register">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label fw-semibold">Nome</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-danger"></i></span>
                                            <input type="text" class="form-control border-start-0" id="name" name="name" placeholder="Digite seu nome completo" autofocus>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-semibold">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-danger"></i></span>
                                            <input type="email" class="form-control border-start-0" id="email" name="email" placeholder="Digite seu email">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label fw-semibold">Senha</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock text-danger"></i></span>
                                            <input type="password" class="form-control border-start-0" id="password" name="password" placeholder="Crie uma senha">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password_confirmation" class="form-label fw-semibold">Confirmar Senha</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock-fill text-danger"></i></span>
                                            <input type="password" class="form-control border-start-0" id="password_confirmation" name="password_confirmation" placeholder="Repita sua senha">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input border-danger bg-danger" type="checkbox" id="terms" name="terms" required>
                                            <label class="form-check-label" for="terms">
                                                Concordo com os <a target="_blank" href="/terms-of-service" class="text-danger text-decoration-none">Termos de Serviço</a> e <a target="_blank" href="/privacy-policy" class="text-danger text-decoration-none">Política de Privacidade</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mb-4">
                                        <button type="submit" class="btn btn-danger btn-lg rounded-3 fw-semibold py-2">Criar Conta</button>
                                    </div>
                                    <div class="text-center mb-4">
                                        <span class="text-muted">Já tem uma conta?</span>
                                        <a href="/login" class="text-danger text-decoration-none fw-semibold ms-1">Fazer Login</a>
                                    </div>
                                    <div class="d-flex align-items-center my-4">
                                        <hr class="flex-grow-1">
                                        <span class="px-3 text-muted">ou</span>
                                        <hr class="flex-grow-1">
                                    </div>
                                    <div class="text-center">
                                        <p class="text-muted mb-3">Registre-se com redes sociais</p>
                                        <div class="d-flex justify-content-center gap-3">
                                            <a href="#" class="">
                                                <i class="bi bi-facebook fs-5"></i>
                                            </a>
                                            <a href="#" class="text-danger">
                                                <i class="bi bi-google fs-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>
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