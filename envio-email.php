<?php

include "MySQL.php";

$connData = [
    "dbserver" => "localhost",
    "username" => "root",
    "password" => "",
    "database" => "aula_php_email",
];

$remetenteNome = "Felipe Campelo";
$remetenteEmail = "felipefcamp@gmail.com";
$destinatarioNome = $_POST['nome'];
$destinatarioEmail = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$addEnvio = new MySQL($connData);

$insertQuery = "INSERT INTO 
                    envios(remetente_nome, remetente_email, destinatario_nome, destinatario_email, assunto, mensagem)
                VALUES 
                    ('{$remetenteNome}', '{$remetenteEmail}', '{$destinatarioNome}', '{$destinatarioEmail}', '{$assunto}', '{$mensagem}')";

$addEnvioResult = $addEnvio->Query($insertQuery);

if ($addEnvioResult === false) {
    echo "Tivemos um problema no momento de inserir no banco de dados.";
}

/* Envio do Email */
//.....

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
