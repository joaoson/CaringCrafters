<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="./style/setup.css">
</head>
<body>
    <div class="login-form-container mx-auto text-center">
        <h1>Entrar</h1>
        <form class="needs-validation" novalidate action="home.php" method="get" id="loginForm">
            <div class="mb-4">
                <label for="form-email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="form-email">
                <div class="invalid-feedback" id="email-feedback">
                    Por favor digite um e-mail válido.
                </div>
            </div>
            <div class="mb-4">
                <label for="form-password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="form-password">
                <div class="invalid-feedback" id="password-feedback">
                    Esta senha não é válida. Mínimo de 8 caracteres e uma letra maiúscula.
                </div>
            </div>
            <button class="submit">Entrar</button>
        </form>
    </div>
    <div class="footer-container-form">
    <?php include('./src/components/footer.php') ?>

    </div>
    <script src="./assets/scripts/login.js"></script>
</body>
</html>