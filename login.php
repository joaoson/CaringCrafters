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
<?php
session_start();
?>
<body>
    <div class="login-background">
        <div class="login-form-container mx-auto text-center rounded bg-white p-4 rounded-sm border border-1">
            <h1 class="mb-5">Entrar</h1>
            <form class="needs-validation" novalidate action="./banco_de_dados/login_php.php" method="POST" id="loginForm">
                <div class="mb-3">
                    <input value="<?php echo isset($_SESSION['loginEmail'])?$_SESSION['loginEmail']:""?>" type="email" class="form-control" id="form-email" name="email" placeholder="Digite seu e-mail aqui...">
                    <div class="invalid-feedback" id="email-feedback">
                        Por favor digite um e-mail válido.
                    </div>
                </div>
                <div class="mb-0">
                    <input type="password" class="form-control" id="form-password" name="password" placeholder="Digite sua senha...">
                    <i class="fa-solid fa-eye-slashed"></i>
                    <div class="invalid-feedback" id="password-feedback">
                        Esta senha não é válida. Mínimo de 8 caracteres e uma letra maiúscula.
                    </div>
                </div>
                <input type="submit" value="Entrar" name="entrar" class="submit btn btn-success">
                <p class="mt-2">Não tem uma conta? <a href="./signIn.php" class="text-decoration-none" style="color: #3C99F0">Cadastre-se</a></p>
            </form>
        </div>
    </div>
    <?php include('./components/footer.php') ?>
    <script src="./assets/scripts/login.js"></script>
    <script src="https://kit.fontawesome.com/9e97ec4bf6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function wrongEmail() {
    swal.fire({
            title: "Credenciais Erradas!",
            text: "O email e/ou senha inseridas estao invalidas.",
            icon: "warning"
            });
}
    
</script>
<?php
if (isset($_SESSION['loginEmail'])) {
    unset($_SESSION['loginEmail']);    
    echo "<script>wrongEmail()</script>";
}

?>
</body>
</html>