
<?php 


if (isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') {
    $url="https://";
}else{
 
   $url="http://";
   $url.=$_SERVER['HTTP_HOST'];
   $url.=$_SERVER['REQUEST_URI'];
   $url;
}

$page=$url;
$sec="86400";




 ?>

<!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="refresh" content="<?php print $sec; ?>" URL="<?php print $page; ?>" >
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
     <title></title>
 </head>
 <body>
 
 </body>
 </html>



<?php 

include_once("conexao.php");

require_once('phpmailer/src/PHPMailer.php');
require_once('phpmailer/src/SMTP.php');
require_once('phpmailer/src/Exception.php');

use phpmailer\PHPMailer\PHPMailer;
use phpmailer\PHPMailer\SMTP;
use phpmailer\PHPMailer\Exception;


$sql = $pdo->prepare("SELECT * FROM `meio_amb_quim` WHERE CURDATE() > data_2");

$sql->execute();

$consulta = $sql->fetchAll();

foreach ($consulta  as $key => $value){

        $value['id'];
        $value['produto'];
        $value['marca'];
        $value['quantidade'];
        $value['frascos_ano'];
        $value['anp'];
        $value['onu'];
        $value['informacoes_adicionais'];
        $value['especificacoes'];
        $value['data_1'];
        $value['data_2'];
   
    
    $DateAndTime = date('Y-m-d');
    $data1 = $value['data_1'];
    $data2 = $value['data_2'];
    

if($DateAndTime > $data2){
   
    $data_br = date("d/m/Y", strtotime($data1));
    $data_br2 = date("d/m/Y", strtotime($data2));

    $value['id'];
    $produto = $value['produto'];
    $marca = $value['marca'];
    $quantidade = $value['quantidade'];
    $frascos_ano = $value['frascos_ano'];
    $anp = $value['anp'];
    $onu = $value['onu'];
    $informacoes_adicionais = $value['informacoes_adicionais'];
    $especificações = $value['especificacoes'];


$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = gethostbyname('smtp.gmail.com');
    $mail->SMTPSecure = "tls";
    //echo 'SMTP secure...<br/>';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->Port = 587;
    $mail->CharSet = "UTF-8";
    $mail->setFrom('');
    $mail->addAddress('');
    $mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );
    $mail->isHTML(true);
    $mail->Subject = 'Produto químico vencido';
    $mail->Body = "Produto = $produto <br>
     Marca = $marca <br>
     Quantidade = $quantidade <br>
     Frascos por Ano = $frascos_ano <br>
     Anp = $anp <br>
     Onu = $onu <br>
     Informações Adicionais = $informacoes_adicionais <br>     
     Especificações = $especificações <br>
     Data de Aviso = $data_br <br>
     Data de Vencimento = $data_br2";
    
    $mail->AltBody = "Produto Químico vencido";
    
//  echo 'SMTP send...<br/>';
    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado';
    }
} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
}else{
   
}
}

 ?>

