<?php

include_once 'Conectar.php';

class Aluno
{

    private $id;
    private $nome;
    private $email;
    private $rm;
    private $con;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRm()
    {
        return $this->rm;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setRm($rm)
    {
        $this->rm = $rm;
    }

    public function salvar()
    {
        try {
            $this->con = new Conectar();
            $sql = "INSERT INTO aluno VALUES (null, ?, ?, ?);";
            $executar = $this->con->prepare($sql);
            $executar->bindValue(1, $this->nome);
            $executar->bindValue(2, $this->email);
            $executar->bindValue(3, $this->rm);
            return $executar->execute() == 1 ? "Cadastrado" : "Erro";
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
    }

    public function listar()
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM aluno";
            $executar = $this->con->prepare($sql);
            return $executar->execute() == 1 ? $executar->fetchAll() : false;
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
    }
}
