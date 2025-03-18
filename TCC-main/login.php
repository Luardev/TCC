<?php
session_start();
require 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = $_POST['Login'];
    $senha = $_POST['senha'];
    $stm = $con->prepare("SELECT * FROM `escolas` WHERE nome = ?"); // trocar
    if ($stm === false){
        die("variavel prepare() falhou" . htmlspecialchars($con->error));
    }
    $stm->bind_param("i",$login); // nome de usuário como parametro para a consulta ("s" significa que é para ser tratado com uma string)
    $stm->execute();
    $result = $stm->get_result();
    if ($result->num_rows > 0){
        while($user = $result->fetch_assoc()){
            if($senha == $user['SENHA']){
              $_SESSION['login'] = $login;
              header('Location: escola/cadescola.php');
              exit();
            }
        }
        header('Location: login.php?aconteceu=incorrect');
        exit();
    }
    else{
        header('Location: login.php ?aconteceu=nexist');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interclasses</title>
    <link rel="shortcut icon" href="Imagens/Icons8-Windows-8-Photo-Video-Sports-Mode.512.png" type="Icon">
    <link rel='Stylesheet' href='CSS.css'>
</head>
<body>
    <main>
        <div id='Login'>
            <fieldset class="login"><br>
                <form method='POST' action="#" autocomplete="on">
                    <label for='Login' class='texto'> Digite seu login: </label>
                    <input type='text' name='Login' required placeholder="Login" autocomplete="Nome"><br><br>
                    <label for='senha' class='texto'> Digite sua senha: </label>
                    <input type='password' name='senha' required placeholder="Senha" autocomplete="senha"><br><br>
                    <input type='submit' name='enviar' id='botao' value='Enviar' onmousemove="passou()" onmouseout="npassou()"><br>              
                </form>
                <p id='perro'></p>
        </fieldset>
        </div>
    </main>
    <script src='./javascript.js'> </script>
</body>
</html>
