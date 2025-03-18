<?php
session_start();
require "../conexao.php";
if(!isset($_SESSION['login'])){
     header('Location: ../index.php');
     exit();
}
try{
    $Nome = $_POST['Nome'];
    $Tipo = $_POST['Tipo'];
    $Quantidade = $_POST['Quantidade'];
    $Data = $_POST['Data'];
    $sql = "INSERT INTO `campeonato`(`FKID_ESCOLAS`, `NOME`, `TIPO`, `QUANTIDADE`, `DATA`, `PERMISSAO`) 
    VALUES (
    '".$_SESSION['login']."',
    '?',
    '?',
    '?',
    '?',
    0)";
    $stmt=$con->prepare($sql);
    $stm->bind_param("ssid",$Nome,$Tipo,$Quantidade,$Data);
    $stmt->execute();
    $campeonatos=$stmt->get_result();
    print($_SESSION['login']);
}
catch (Exception $Ex){
    print("Erro na inserção: ".$Ex);
}
?>