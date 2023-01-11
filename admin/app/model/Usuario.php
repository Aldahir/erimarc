<?php

//include('Conexao.php');

class Usuario
{
    private $conexao;
    private $nome;
    private $sobrenome;
    private $funcao;
    private $email;
    private $estado;
    private $sobre;
    private $img;
    private $telefone;

    private $username;
    private $password;

    function __construct($conexao, $uid = null)
    {
        $this->conexao = $conexao;

        if($uid != null){
            return $this->getUsernameById($uid);
        }
    }

    public function novo_usuario(){
        try {
            $sql = $this->conexao->prepare("INSERT INTO `usuario`(`username`, `senha`, `nome`, `sobrenome`, `funcao`, `email`, `telefone`, `sobre`, `img`, `estado`) VALUES (?,?,?,?,?,?,?,?,?,?)");
            $sql->bindParam(1, $this->getUsername());
            $sql->bindParam(2, $this->getPassword());
            $sql->bindParam(3, $this->getNome());
            $sql->bindParam(4, $this->getSobrenome());
            $sql->bindParam(5, $this->getFuncao());
            $sql->bindParam(6, $this->getEmail());
            $sql->bindParam(7, $this->getTelefone());
            $sql->bindParam(8, $this->getSobre());
            $sql->bindParam(9, $this->getImg());
            $sql->bindParam(10, $this->getEstado());

            return $sql->execute() ? json_encode(["message" => "successfully", "status" => 200]) : json_encode(["message" => "error", "status" => 500]);
        } catch (PDOEXception $th) {
            die("".$th->getMessage());
        }
    }
    public function ler_todos($get_data_as_json = false){
        try {
            $sql = $this->conexao->query("SELECT * FROM `usuario`");
            $sql->execute();
            $res = $sql->fetchAll(5);
            if ($get_data_as_json == true){
                return json_encode($res[0]);
            } else {
                foreach ($res[0] as $key => $value) {
                    echo '<strong>'.$key .'</strong> : '. $value . '<br>';
                };
            }
        } catch (PDOException $th) {
            die("".$th->getMessage());
        }
    }
    public function getUsernameById(int $id = null, $get_data_as_json = false){
        try {
            $sql = $this->conexao->query("select * from usuario u where u.id = {$id}");
            if ($get_data_as_json == true){
                return json_encode($sql);
            } else {
                echo $sql['username'];
            }
        } catch (PDOEXception $th) {
            
        }
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     *
     * @return  self
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of funcao
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * Set the value of funcao
     *
     * @return  self
     */
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of sobre
     */ 
    public function getSobre()
    {
        return $this->sobre;
    }

    /**
     * Set the value of sobre
     *
     * @return  self
     */ 
    public function setSobre($sobre)
    {
        $this->sobre = $sobre;

        return $this;
    }
}
