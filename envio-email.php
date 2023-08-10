<?php

$nome = "Felipe";

if ($nome === "Felipe") {
    $response = [
        "nomeCompleto" => "Felipe Fernandes Campelo",
        "idade" => 35,
        "sexo" => "Masculino",
        "endereco" => [
            "logradouro" => "Rodovia Municipal dos Andradas"
        ],
    ];

    // for ($i = 0; $i <= 10; $i++) {
    //     echo $i;
    // }

    $evangelhos = [
        "Mateus" => 1,
        "João" => 4,
        "Lucas" => 3,
        "Marcos" => 2,
    ];
    
    foreach ($evangelhos as $evangelho => $ordem) {
        echo "O evangelho de {$evangelho} é o livro número {$ordem} no Novo Testamento. <br>";
    }
    
    echo "<br><br>";
    
    asort($evangelhos); // Ordenacao pelo value
    foreach ($evangelhos as $evangelho => $ordem) {
        echo "O evangelho de {$evangelho} é o livro número {$ordem} no Novo Testamento. <br>";
    }
}
