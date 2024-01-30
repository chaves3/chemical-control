<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'produtos_quimicos_meio_ambiente.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Planilha de Controle dos Produtos quimicos</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Produto</b></td>';
		$html .= '<td><b>Marca</b></td>';
		$html .= '<td><b>Quantidade</b></td>';
		$html .= '<td><b>Frascos por ano</b></td>';
		$html .= '<td><b>Anp</b></td>';
		$html .= '<td><b>Onu</b></td>';
		$html .= '<td><b>Informações Adicionais</b></td>';
		$html .= '<td><b>Especificações</b></td>';
		$html .= '<td><b>Data de Aviso</b></td>';
		$html .= '<td><b>Data de Vencimento</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = $pdo->prepare("SELECT * FROM meio_amb_quim");
		$result_msg_contatos->execute();
		$consulta = $result_msg_contatos->fetchAll();
		
		foreach ($consulta as $key => $value) {
			
		
			
			$html .= '<tr>';
			$html .= '<td>'.$value["id"].'</td>';
			$html .= '<td>'.$value["produto"].'</td>';
			$html .= '<td>'.$value["marca"].'</td>';
			$html .= '<td>'.$value["quantidade"].'</td>';
			$html .= '<td>'.$value["frascos_ano"].'</td>';
			$html .= '<td>'.$value["anp"].'</td>';
			$html .= '<td>'.$value["onu"].'</td>';
			$html .= '<td>'.$value["informacoes_adicionais"].'</td>';
			$html .= '<td>'.$value["especificacoes"].'</td>';
			$html .= '<td>'.$value["data_1"].'</td>';
			$html .= '<td>'.$value["data_2"].'</td>';
			$html .= '</tr>';
			;

		}
		
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>