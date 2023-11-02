<?php

include_once 'Conectar.php';

class Categoria
{
    private $id;
    private $nome;
    private $descricao;
    private $con;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function salvar()
    {
        try {
            $this->con = new Conectar();
            $sql = "INSERT INTO categoria VALUES (null, ?, ?);";
            $executar = $this->con->prepare($sql);
            $executar->bindValue(1, $this->nome);
            $executar->bindValue(2, $this->descricao);
            return $executar->execute() == 1 ? "Cadastrado" : "Erro";
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
    }

    public function listar()
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM categoria";
            $executar = $this->con->prepare($sql);
            return $executar->execute() == 1 ? $executar->fetchAll() : false;
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
    }
}
