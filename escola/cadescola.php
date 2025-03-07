<?php
session_start();
require "../conexao.php";
if(!isset($_SESSION['login'])){
    header('Location: ../index.php');
    exit();
}
try{
$stmt=$con->prepare("SELECT * from campeonato");
$stmt->execute();
$campeonatosvar=$stmt->get_result();
} catch (Exception $Ex) {
    echo 'Erro:'.$Ex;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<?php
/*
echo $campeonatosvar->num_rows;
if($campeonatosvar->num_rows>=1){
    //FAZ OS CARDZINHOS NA TELA DE ACORDO COM OS CAMPS
   while ($row = mysqli_fetch_assoc($campeonatosvar)) {
        //echo "<tr><td>".number_format($row['id'])."</td><td>".number_format($row['metragem'])."</td><td>".$row['descricao']."</td><td><img src='fotos/".number_format($row['id'])."/".$row['imagem']."'></td><td>".$row['quartos']."</td></tr>";
      //echo "";
      //echo"<div class='w3-container'";
     // echo"<div class='w3-third w3-center w3-card-4 w3-pale-red'";
       // echo "<div class='w3-row w3-border w3-padding'>";
        echo "<p>".$row['NOME']."</p><br>";
       // echo "<img src='fotos/".number_format($row['id'])."/".$row['imagem']."'class ='w3-round-large w3-col'>";
       // echo "<div class='w3-container w3-center'>";
       echo"<p>Tipo: ".$row['TIPO']."</p>";
        //  echo "<p>Descrição<br>".$row['']."</p>
        //  <p>Metragem: ".number_format($row['QUANTIDADE'])."m²</p>
        //  <p>Quartos: ".number_format($row['quartos'])."//Banheiros: ".number_format($row['banheiros'])."//Suítes: ".number_format($row['suites'])."//Vagas: ".number_format($row['vagas'])."</p>
         // <p>Valor: ".number_format($row['valor'])."//IPTU: ".number_format($row['iptu'])."</p>
         // <p>Cidade: ".$row['cidade']."//Bairro: ".$row['bairro']."//Endereço: ".$row['endereco']."</p>";

       //echo"</div>";
     // echo"</div>";
    }
}

*/
?>
</body>
</html>