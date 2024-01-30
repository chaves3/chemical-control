
<?php

include_once 'conexao.php';

$acao = 'recuperar';

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : '';

$sql = $pdo->prepare("SELECT * FROM meio_amb_quim WHERE produto like '%$filtro%' ORDER BY id");
$sql->execute();

$registros = $sql->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
  <title>cadastro</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

      <style type="text/css">
   
    body{
    
        background: rgb(245,245,245);
        font-family: "Times New Roman", Times, sans-serif;
        font-size: 15px;
    
       }
       

    table {
      border-collapse: collapse;
      width: 20%;
      color: black;
      border-radius: 10px;

       }

       th {

      background-color: white;

       }

       th td {

         border: 1px solid black;
         padding: 5px;
       }

      .btn2{

        background: yellow;
        color: black;
      }

       
    
    </style>


</head>
<body>


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
    <a class="navbar-brand btn-dark" href="cadastro.php">Consulta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link btn-dark" aria-current="page" href="index.php">Home</a>
        <label class="mt-2 "></label>
        <a class="nav-link btn-dark" href="cadastro.php">Cadastro</a>
        <label class="mt-2 "></label>
        <a class="nav-link btn-dark" href="consulta.php">Consulta</a>
        </a>
        <label class="mt-2 "></label>
        <a class="nav-link   btn-dark" href="baixar.php">Baixar em Excel</a>
        <label class="mt-2 "></label>
        <a class="nav-link   btn-dark" href="pdf.php">Baixar em Pdf</a>
      </div>
    </div>
  </div>
</nav>

<br><br>

  <div class="container">

  <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
    
    <div class="bg-success pt-2 text-white d-flex justify-content-center">
			<h5>Item inserido com sucesso</h5>
		</div>
    <script>
      setTimeout(() => {
        window.location.href ="consulta.php";
      }, 5000);
    </script>
<?php } ?> 


<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 2) { ?>
    <div class="bg-danger pt-2 text-white d-flex justify-content-center">
			<h5>Item Deletado com sucesso</h5>
		</div>
    <script>
      setTimeout(() => {
        window.location.href ="consulta.php";
      }, 5000);
    </script>
<?php } ?> 

<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 3) { ?>
    <div class="bg-info pt-2 text-white d-flex justify-content-center">
			<h5>Item Atualizado com sucesso</h5>
		</div>
    <script>
      setTimeout(() => {
        window.location.href ="consulta.php";
      }, 5000);
    </script>
<?php } ?> 

  <section>
      
   
    <br><br>
      <form method="GET" action="consulta.php">
        Filtrar pelo Produto: <input type="text" name="filtro" required autofocus>
        <input type="submit" value="Pesquisar" class="buton">
      </form>
      <br><br><br>

      <table class="table  table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Marca</th>
            <th>Quantidade</th>
            <th>Frascos anual</th>
            <th>Anp</th>
            <th>Onu</th>
            <th>Informações adicionais</th>
            <th>Especificações</th>
            <th>Entrada</th>
            <th>Vencimento</th>
            <th>Editar</th>
            <th>Deletar</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($registros as $key => $value) {
              $data1 = $value['data_1'];
              $data2 = $value['data_2'];

              $DateAndTime = date('Y-m-d');

              $data_timestamp1 = new DateTime($data1);
              $data_timestamp2 = new DateTime($data2);
              $data_timestamp3 = new DateTime($DateAndTime);

              if ($data_timestamp3 > $data_timestamp2) {
                  $color = 'red';
              } else {
                  $color = 'black';
              }

              ?>

           

          <tr style="color: <?php echo $color; ?>;">
            <td><?php echo $value['id'];
              $id = $value['id']; ?></td>
            <td><?php echo $value['produto']; ?></td>
            <td><?php echo $value['marca']; ?></td>
            <td><?php echo $value['quantidade']; ?></td>
            <td><?php echo $value['frascos_ano']; ?></td>
            <td><?php echo $value['anp']; ?></td>
            <td><?php echo $value['onu']; ?></td>
            <td><?php echo $value['informacoes_adicionais']; ?></td>
            <td><?php echo $value['especificacoes']; ?></td>
            <td>
              <?php

                 $data_nova = $value['data_1'];

              $data_br = date('d/m/Y', strtotime($data_nova));

              echo $data_br;

              ?>
               </td>
            
            
            <td><?php

             $data_nova2 = $value['data_2'];

              $data_br2 = date('d/m/Y', strtotime($data_nova2));

              echo $data_br2;

              ?>
            
          
          </td>
            
            <td><?php echo "<button class = 'btn btn-success' onclick=\"location.href='editar-consulta.php?id=$id';\">Editar</button>"; ?></td>
            <td><?php echo "<button class = 'btn btn-danger' onclick=\"location.href='limpar.php?id=$id';\">Deletar</button>"; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>

    </section>
  
  </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


