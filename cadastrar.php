<?php
session_start();
require 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = $_POST['Login'];
    $senha = $_POST['senha'];
    $stm = $con->prepare("SELECT * FROM `usuarios` WHERE login = ?"); // trocar
    if ($stm === false){
        die("variavel prepare() falhou" . htmlspecialchars($con->error));
    }
    $stm->bind_param("i",$login); // nome de usuário como parametro para a consulta ("s" significa que é para ser tratado com uma string)
    $stm->execute();
    $result = $stm->get_result();
    if ($result->num_rows > 0){
        while($user = $result->fetch_assoc()){
            if($senha == $user['senha']){
              $_SESSION['login'] = $login;
              header('Location: index.php');
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