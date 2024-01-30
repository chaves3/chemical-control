
<?php
include("conexao.php");

$html = "<table  border=2 style='font-size: 13px;'";
$html .= '<thead>';
$html .= '<tr>';
$html .= '<th>Id</th>';
$html .= '<th>Produto</th>';
$html .= '<th>Marca</th>';
$html .= '<th>Quantidade</th>';
$html .= '<th>Frascos Anual</th>';
$html .= '<th>Anp</th>';
$html .= '<th>Onu</th>';
$html .= '<th>Informações Adicionais</th>';
$html .= '<th>Especificações</th>';
$html .= '<th>Entrada</th>';
$html .= '<th>Saída</th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';

$result_transacoes = $pdo->prepare("SELECT * FROM meio_amb_quim");
$result_transacoes->execute();
$consultas = $result_transacoes->fetchAll();

foreach($consultas as $key => $value){
    $html .= '<tr><td>' . $value['id'] . "</td>";
    $html .= '<td>' . $value['produto'] . "</td>";
    $html .= '<td>' . $value['marca'] . "</td>";
    $html .= '<td>' . $value['quantidade'] . "</td>";
    $html .= '<td>' . $value['frascos_ano'] . "</td>";
    $html .= '<td>' . $value['anp'] . "</td>";
    $html .= '<td>' . $value['onu'] . "</td>";
    $html .= '<td>' . $value['informacoes_adicionais'] . "</td>";
    $html .= '<td>' . $value['especificacoes'] . "</td>";
    $html .= '<td>' . $data_br1 = date('d/m/Y', strtotime($value['data_1'])); $data_br1 . "</td>";
    $html .= '<td>' . $data_br2 = date('d/m/Y', strtotime($value['data_2'])); $data_br2 . "</td></tr>";
    $html .= '</tbody>';
    $html .= '</table';
}




//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once("dompdf/autoload.inc.php");

//Criando a Instancia
$dompdf = new DOMPDF();

// Carrega seu HTML
$dompdf->load_html('
        <h1 style="text-align: center;">Relatório dos Itens Químicos</h1>
        ' . $html . '
    ');

$dompdf->set_option('defaulfont', 'sans');

$dompdf->set_Paper('A4', 'portrail');

//Renderizar o html
$dompdf->render();

//Exibibir a página
$dompdf->stream(
    "Relatório dos itens-quimicos.pdf",
    array(
        "Attachment" => false //Para realizar o download somente alterar para true
    )
);
