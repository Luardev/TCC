<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "usbw";
$banco = "tcc_3infob";
$con = new mysqli($servidor,$usuario,$senha,$banco);
if ($con -> connect_error){
    die("Falha de conexão". $con -> connect_error);
}
?>
