<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css2/estilo.css">
   
   <!-- Font Awesome -->
   <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

</head>

<style type="text/css">
  





</style>

<body>

<nav class="navbar navbar-expand-lg  bg-warning ">

  <div class="container-fluid">
    <a class="navbar-brand btn-dark" href="cadastro.php">Tela de Edição</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link btn-dark" aria-current="page" href="index.php">Home</a>
        <label class="mt-2 "></label>
        <a class="nav-link btn-dark" href="cadastro.php">Cadastro</a>
        <label class="mt-2 "></label>
        <a class="nav-link btn-dark" href="consulta.php">Consulta</a>
       
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
      //print $value['id'];
      //print $value['produto'];
      //print $value['marca'];
}

?>

<form class="m-4" method="post" action="editar-up-consulta.php">
 


<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-regular fa-id-card"></i></span>
  <input type="int" class="form-control" placeholder="Id" aria-label="id" aria-describedby="basic-addon1" name="id" id="id" value="<?php print  $value['id']; ?>">
</div>


<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-solid fa-vial-circle-check"></i></span>
  <input type="text" class="form-control" placeholder="Produto" aria-label="Produto" aria-describedby="basic-addon1" name="produto" id="produto" value="<?php print  $value['produto']; ?>">
</div>



<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-solid fa-copyright"></i></span>
  <input type="text" class="form-control" placeholder="Marca" aria-label="Marca" aria-describedby="basic-addon1" name="marca" id="marca" value="<?php print $value['marca']; ?>">
</div>

 

<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-sharp fa-solid fa-arrow-up-9-1"></i></span>
  <input type="text" class="form-control" placeholder="Quantidade" aria-label="Quantidade" aria-describedby="basic-addon1" name="quantidade" id="quantidade" value="<?php print  $value['quantidade']; ?>">
</div>


<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-solid fa-vial"></i></span>
  <input type="int" class="form-control" placeholder="Frascos por Ano" aria-label="frascos" aria-describedby="basic-addon1" name="frascos_ano" id="frascos_ano" value="<?php print  $value['frascos_ano']; ?>">
</div>

<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-solid fa-gas-pump"></i></span>
  <input type="text" class="form-control" placeholder="Anp" aria-label="Anp" aria-describedby="basic-addon1" name="anp" id="anp" value="<?php print  $value['anp']; ?>">
</div>


<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-sharp fa-solid fa-arrow-up-1-9"></i></span>
  <input type="text" class="form-control" placeholder="Onu" aria-label="Onu" aria-describedby="basic-addon1" name="onu" id="onu" value="<?php print  $value['onu']; ?>">
</div>

 
<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-solid fa-circle-info"></i></span>
  <input type="text" class="form-control" placeholder="Informações Adicionais" aria-label="Informações Adicionais" aria-describedby="basic-addon1" name="informacoes_adicionais" id="informacoes_adicionais" value="<?php print  $value['informacoes_adicionais']; ?>">
</div>


<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-solid fa-landmark"></i></span>
  <input type="text" class="form-control" placeholder="Especificações" aria-label="Especificações" aria-describedby="basic-addon1" name="especificações" id="especificações" value="<?php print  $value['especificacoes'];?>">
</div>



<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
  <input type="date" class="form-control" placeholder="Data de Aviso" aria-label="Data de Vencimento" aria-describedby="basic-addon1" name="data-1" id="data-1" value="<?php print  $value['data_1'];?>">
</div>


<div class="input-group mb-3 w-50">
  <span class="input-group-text btn btn-outline-warning" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
  <input type="date" class="form-control" placeholder="Data de Aviso" aria-label="Data de Vencimento" aria-describedby="basic-addon1" name="data-2" id="data-2" value="<?php print  $value['data_2'];?>">
</div>


  <button type="submit" class="buton">Editar</button>
</form>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>