<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Responsiva</title>
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">-->
  <!-- <link rel="stylesheet" href="style/volunteer.css">  pq isso? desativei pra ver se muda, qualquer coisa coloca dps-->
  <link rel="stylesheet" href="./style/setup.css">
</head>
<body>

<div class="container">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
      <a href="index.php" style="text-decoration: none; color: black"><img src="./assets/brand_identity/Logo_PNG-verde.png" class="navbar-brand" style="max-width:80px">Caring Crafters</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="rightside ms-auto">

            <a href="login.php"><button class="btn btn-outline-success">Entrar</button></a>
            <a href="signIn.php"><button class="btn btn-outline-success">Cadastre-se</button></a>
        </div>
      </div>
    </div>
  </nav>
</div>


<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>-->

</body>
</html>
