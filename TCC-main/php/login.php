<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagens/Icons8-Windows-8-Photo-Video-Sports-Mode.512.png" type="Icon">
    <link rel='Stylesheet' href='../CSS/login.css?a=<?php echo time() ?>'>
    <script src='../bootstrap-5.3.6-dist/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='../bootstrap-5.3.6-dist/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
    <script src="../javascript.js?a=<?php echo time() ?>"> </script>
    <title>Login - Interclasse</title>
</head>
<body class='d-flex justify-content-center align-items-center'>
  <img src="../Imagens/fundo5.png" alt="Logo"/>
  <span id="aviso"></span>
  <div class="container">
    <div class="login-container">
      <div class="logo-text">🏆 Interclasse</div>
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuário</label>
          <input type="text" class="form-control" id="Login" placeholder="Digite seu usuário">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary" onclick="entrar()">Entrar</button>
        </div>
        <div class="text-center mt-3">
          <a href="#">Esqueceu a senha?</a>
        </div>
    </div>
  </div>
</body>
<!-- <footer>
  <p>&copy; <?php date_default_timezone_set('America/Sao_Paulo');echo date("Y"); ?> Interclasse. Todos os direitos reservados.</p>
  <p>Desenvolvido por <a href="https://github.com/seu-usuario" target="_blank">Seu Nome</a></p>
</footer> -->
</html>
