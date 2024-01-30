
<?php 

include_once("conexao.php");

$produto = $_POST['produto'];
$marca = $_POST['marca'];
$quantidade = $_POST['quantidade'];
$frascos_ano = $_POST['frascos_ano'];
$anp = $_POST['anp'];
$onu = $_POST['onu'];
$informacoes_adicionais = $_POST['informacoes_adicionais'];
$especificações = $_POST['especificações'];
$data_1 = $_POST['data-1'];
$data_2 = $_POST['data-2'];



$sql = $pdo->prepare("INSERT INTO meio_amb_quim 
(produto, Marca, quantidade, 	frascos_ano, ANP, onu, informacoes_adicionais, especificacoes,data_1, data_2) 
 VALUES (?,?,?,?,?,?,?,?,?,?)");

$sql->execute(array($produto,$marca,$quantidade,$frascos_ano,$anp,$onu,$informacoes_adicionais,
$especificações,$data_1,$data_2));

header('location: consulta.php?inclusao=1');

?>


