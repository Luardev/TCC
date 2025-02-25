# TCC
Repositório criado para armazenar os arquivos do nosso site.

Conexão com o infinityfree
<?php
$servidor = "sql210.infinityfree.com";
$usuario = "if0_38234357";
$senha = "senhadobanco1";
$banco = "if0_38234357_tcc3infob";
$con = new mysqli($servidor,$usuario,$senha,$banco);
if ($con -> connect_error){
    die("Falha de conexão". $con -> connect_error);
}
?>
