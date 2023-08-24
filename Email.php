<?php

class Email
{
    // Propriedades
    private string $nome;
    private string $email;
    private string $assunto;
    private string $mensagem;
    private array  $databaseConnData;

    public function __construct(string $nome, string $email, string $assunto, string $mensagem)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->assunto = $assunto;
        $this->mensagem = $mensagem;

        /* Dados de conexao */
        $this->databaseConnData = [
            "dbserver" => "localhost",
            "username" => "root",
            "password" => "",
            "database" => "aula_php_email",
        ];
    }

    public function addBD()
    {
        include "MySQL.php";

        $addEnvio = new MySQL($this->databaseConnData); // Instancia a classe, criando um objeto
        $insertQuery = "INSERT INTO 
                            envios(nome, email, assunto, mensagem)
                        VALUES 
                            ('{$this->nome}', '{$this->email}', '{$this->assunto}', '{$this->mensagem}')";
        $addEnvioResult = $addEnvio->Query($insertQuery);

        if (!$addEnvioResult) {
            return false;
        }

        return true;
    }

    public function enviarEmail()
    {
    }
}
