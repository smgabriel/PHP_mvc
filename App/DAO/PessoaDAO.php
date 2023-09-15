<?php

class PessoaDAO 
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306; dbname=db_mvc";

        $this->conexao = new PDO($dsn, 'root', '');
    }
    public function insert()
    {

    }

    public function update()
    {

    }

    public function select()
    {

    }
}