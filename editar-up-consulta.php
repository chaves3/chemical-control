<?php 

include_once("conexao.php");


if (isset($_POST['id']) || isset($_POST['produto']) || isset($_POST['marca']) || isset($_POST['quantidade']) || isset($_POST['frascos_ano']) || isset($_POST['anp']) || isset($_POST['onu']) || isset($_POST['informacoes_adicionais']) || isset($_POST['especificações']) || isset($_POST['data-1']) || isset($_POST['data-2'])); {

$id = $_POST['id'];
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


$sql = $pdo->prepare(
"UPDATE meio_amb_quim SET produto = ?, marca = ?, 
quantidade = ?, frascos_ano = ?,  
ANP = ?, onu = ?, informacoes_adicionais = 
?,  especificacoes = ?, data_1 = ?, data_2 = 
? WHERE  id = ?");

$sql->execute(array($produto,$marca,$quantidade,$frascos_ano,$anp,$onu,
$informacoes_adicionais,$especificações,$data_1,$data_2,$id));

header('location: consulta.php?inclusao=3');







	
}





