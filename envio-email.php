<?php

/* Cadastro no Banco de Dados */
include "Email.php"; // Classe que implementa a inclusao do registro no banco de dados

// Dados do formulario
$nome     = $_POST['nome'];
$email    = $_POST['email'];
$assunto  = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

/* Uso da classe de envio de email */
/* Nesse ponto somente para adicionar ao banco de dados */
$addEmailBD = new Email($nome, $email, $assunto, $mensagem); // Objeto
$addEmailBDResult = $addEmailBD->addBD();

if ($addEmailBDResult === false) {
    echo "Tivemos um problema no momento de inserir no banco de dados.";
    exit;
}
exit;
/* -------------------------------------------------------------------------------------------------------- */

/* Envio do Email */
include 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Instancia a classe e cria um objeto

try {
    //Server settings
    $mail->isSMTP();
    $mail->SMTPDebug  = 4;
    $mail->Host       = 'smtp.hostinger.com';
    $mail->Port       = 587;
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@sabercristao.com.br';
    $mail->Password   = 'Noreply159753@!';
    
    //Recipients
    $mail->setFrom("noreply@sabercristao.com.br", "Saber Cristão | Não responda!!");
    $mail->addAddress("felipefcamp@gmail.com", "Felipe Campelo");
    $mail->addCC('felipefcampdev@gmail.com');

    //Content
    $dataHoje = date("d/m/Y") . " às " . date("H:i:s");

    $mail->isHTML(true);
    $mail->Subject = "Mensagem do site";
    $mail->CharSet = 'UTF-8';
    $mail->Body    = "
        <h2>Mensagem enviada do site</h2>
        <p>Nome: {$nome}</p>
        <p>Email: {$email}</p>
        <p>Assunto: {$assunto}</p>
        <p>Mensagem: {$mensagem}</p>

        <br><br>

        Email enviado em {$dataHoje}
    ";

    $mail->send();
    echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
    echo "A mensagem não pôde ser enviada. Erro: {$mail->ErrorInfo}";
}

// $nome = "Felipe";

// if ($nome === "Felipe") {
//     $response = [
//         "nomeCompleto" => "Felipe Fernandes Campelo",
//         "idade" => 35,
//         "sexo" => "Masculino",
//         "endereco" => [
//             "logradouro" => "Rodovia Municipal dos Andradas"
//         ],
//     ];

//     // for ($i = 0; $i <= 10; $i++) {
//     //     echo $i;
//     // }

//     $evangelhos = [
//         1 => "Mateus",
//         4 => "João",
//         3 => "Lucas",
//         2 => "Marcos",
//     ];
    
//     // foreach ($evangelhos as $evangelho => $ordem) {
//     //     echo "O evangelho de {$evangelho} é o livro número {$ordem} no Novo Testamento. <br>";
//     // }
    
//     // echo "<br><br>";
    
//     ksort($evangelhos); // Ordenacao pelo value
//     // foreach ($evangelhos as $evangelho => $ordem) {
//     //     echo "O evangelho de {$evangelho} é o livro número {$ordem} no Novo Testamento. <br>";
//     // }

//     for ($i = 1; $i <= count($evangelhos); $i++) {
//         echo $i . " => " . $evangelhos[$i] . "<br>";
//     }

//     echo "<br><br>";

//     // Checador booleano
//     $checkError = false;
//     $counter = count($evangelhos);

//     // Iterable elements (array = Lista ou Matriz ... Objeto = Lista)
//     if (count($evangelhos) < 4) {
//         $checkError = true;
//     }

//     if ($checkError === true) {
//         echo "aqui<br>";
//         echo "Opa, o numero de Evangelhos da lista é {$counter}! Deveria ser 4.";
//     } else {
//         echo "nao, aqui<br>";
//         echo "Excelente! O numero de Evangelhos da lista é {$counter}! De fato temos 4 Evangelhos no Novo Testamento.";
//     }
// }
