<?php

class Conexao
{
    private $conexao;
    private $username = "root";
    private $password = "root";
    private $dbname = "test";

    public function __construct()
    {
        try {
            $cone = new \PDO('mysql:dbname=test;host=localhost', 'root', 'root');
            $cone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $cone->exec("set lc_time_names = 'pt_BR'");

            self::setConexao($cone);
            return $this->conexao;
        } catch (PDOException $e) {
            die("Não foi possivel se conectar a base de dados! Erro: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        try {
            $conexao = new PDO('mysql:host=localhost;port=3306; dbname='.$this->dbname, $this->username, $this->password);
            // $conexao = new PDO('mysql:host=localhost;port=3306; dbname=fantastico', 'root', 'root');
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET CHARACTER SET utf8"); // define a codificacao utf8 de toda a consula
            return $conexao;
        } catch (PDOException $erro) {
            $erro->getMessage();
            die("Não foi possivel se conectar a base de dados! Erro: " . $erro->getMessage());
        }
    }


    public function getConexao()
    {
        return $this->conexao;
    }

    public function setConexao($conexao)
    {
        $this->conexao = $conexao;

        return $this;
    }
}