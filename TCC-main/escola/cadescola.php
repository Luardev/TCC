<?php
session_start();
require "../conexao.php";
if(!isset($_SESSION['login'])){
     header('Location: ../index.php');
     exit();
}
try{
    $stmt=$con->prepare("SELECT a.*, DATE_FORMAT(a.DATA, '%d/%m/%Y') AS Data_format from campeonato a join escolas b on a.FKID_ESCOLAS = b.ID_ESCOLA where b.NOME = '".$_SESSION['login']."';");
    $stmt->execute();
    $campeonatos=$stmt->get_result();
}
catch (Exception $Ex) {
    echo $Ex;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Imagens/campeonato.png" type="Icon">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Campeonatos</title>
</head>
<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.php">Home</a>
          </li>
        </ul>
      </div>
    </div>
        <button class="btn btn-outline-success mx-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Criar</button>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Criar Campeonato</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method='POST' action=".\cadastrar.php">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nome:</label>
              <input type="text" class="form-control" name="Nome">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Tipo:</label>
              <select id="tipo" name="Tipo" class="form-control">
                <option value="Empyt" selected disabled> - </option>
                <option value="Copa"> Copa </option>
                <option value="Mata-Mata"> Mata-Mata </option>
              </select>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Quantidade:</label>
              <input type="number" class="form-control" name="Quantidade" id="recipient-name" step="2"  min="2" max="20">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Data:</label>
              <input type="date" class="form-control" name="Data" id="recipient-name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button id="cad_new_camp" type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

    <h1 class='text-center mt-4'> Campeonatos da Escola: <?php echo htmlspecialchars($_SESSION['login']) ?></h1>
<?php
if($campeonatos->num_rows>=1){
    echo "<div class='d-flex flex-column justify-content-center align-items-center' style='height: 100vh;'>";
    //FAZ OS CARDZINHOS NA TELA DE ACORDO COM OS CAMPS
   while ($row = mysqli_fetch_assoc($campeonatos)) {
       echo "
        <div class='bg-primary text-center text-white p-3 mb-3 rounded-3 border border-2 border-black w-auto h-auto'>
            <p class='fs-5'> Nome do Campeonato: ".htmlspecialchars($row['NOME'])."</p>
            <p> Quantidade de Jogos: ".htmlspecialchars($row['QUANTIDADE'])."</p>
            <p> Data de Realização: ".$row['Data_format']."</p>
            <p> Tipo: ".htmlspecialchars($row['TIPO'])."</p>
        </div>    
       ";
    }
    echo "</div>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

</script>
</body>
</html>