<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>
  <meta charset="utf-8">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css2/estilo.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>

<style type="text/css">
  







</style>

<body>

<nav class="navbar navbar-expand-lg navbar-outline bg-warning ">

  <div class="container-fluid">
    <a class="navbar-brand text-dark mudar-cor" href="index.php">Deletar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-dark mudar-cor" aria-current="page" href="index.php">Home</a>
        <label class="mt-2 text-dark">|</label>
        <a class="nav-link active ttext-dark mudar-cor" href="cadastro.php">Cadastro</a>
        <label class="mt-2 text-dark">|</label>
        <a class="nav-link active text-dark mudar-cor" href="consulta.php">Consulta</a>
       
      </div>
    </div>
  </div>
</nav>

<br><br>


<?php 

include_once("conexao.php");

$id = $_GET['id']  ?? '';

$sql = $pdo->prepare("SELECT * FROM meio_amb_quim WHERE id = ?");
$sql->execute(array($id));

$consulta = $sql->fetchAll();

foreach ($consulta as $key => $value) {
   
}

?>


<form class="m-4" method="post" action="">
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label click-cor" for="exampleInputEmail1">Id:</label>
    <input type="text" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php print $value['id']; ?>">
    <div id="emailHelp" class="form-text"></div>
  </div>


  </div>

  <button type="submit" class="btn btn-danger">Deletar</button>
</form>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

$id = $value['id'];;

$sql = $pdo->prepare("DELETE FROM meio_amb_quim WHERE id = ?");

$sql->execute(array($id));

header('location: consulta.php?inclusao=2');


?>