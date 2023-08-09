<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

echo "Nome: {$nome}<br>";
echo "Email: {$email}<br>";
echo "Assunto: {$assunto}<br>";
echo "Mensagem: {$mensagem}";

try {
    if (!mail($email, $assunto, $mensagem)) {
        echo "<div style='margin-top: 20px; background: #eee; padding: 1rem;'>
            Erro ao enviar email
        </div>";
    }
} catch(Exception $e) {
    echo "<div style='margin-top: 20px; background: #eee; padding: 1rem;'>" . $e->getMessage() . "</div>";
}
