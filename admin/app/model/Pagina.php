<?php

// require_once 'Conexao.php';

class Pagina
{
    private $conexao;
    private $id;
    private $titulo;
    private $conteudo;
    private $estado;
    private $uid;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function nova_pagina()
    {
        $conteudo = $this->getConteudo();
        $estado = $this->getEstado();

        try {
            $sql = $this->conexao->prepare("INSERT INTO pagina(titulo, data_criado, `uid`, conteudo, estado) VALUES(?,?,?,?,?)");
            $sql->bindParam(1, $this->getTitulo());
            $sql->bindParam(2, time());
            $sql->bindParam(3, $this->getUid());
            $sql->bindParam(4, $this->getConteudo());
            $sql->bindParam(5, $this->getEstado());

            return $sql->execute() ? json_encode(["message"=>"successfully", "status"=>200]) : json_encode(["message"=>"error", "status"=>500]);


        } catch (PDOException $e) {
            die("" . $e->getMessage());
        }
    }

    public function ler_paginas($get_data_as_json)
    {
        try {
            $sql = $this->conexao->query("SELECT * FROM `pagina`");
            
        } catch (PDOException $e) {
            die("" . $e->getMessage());
        }
    }

    public function editar_pagina()
    {
        try {
            $sql = $this->conexao->prepare("UPDATE `pagina` p SET titulo=?, data_updated=?, `uid`=?, conteudo=?, estado=? WHERE p.id = ?");
            $sql->bindParam(1, $this->getTitulo());
            $sql->bindParam(2, time());
            $sql->bindParam(3, $this->getUid());
            $sql->bindParam(4, $this->getConteudo());
            $sql->bindParam(5, $this->getEstado());
            $sql->bindParam(6, $this->getId());
        } catch (PDOException $th) {
            die('' . $th->getMessage());
        }
    }

    /**
     * Get the value of uid
     */
    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get the value of conteudo
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Set the value of conteudo
     *
     * @return  self
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }
}
