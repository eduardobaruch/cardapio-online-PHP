<?php

require_once "clienteDAO.php";


class Cliente{
    private $nome;
    private $cpf;
    private $email;
    private $bonus;
    private $senha;
    private $poder;

    public function __construct($nome, $cpf, $email, $senha)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
        $this->bonus = 0;
        $this->poder = 0;
    }
    //Metodos SET
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getBonus(){
        return $this->bonus;
    }

    //Metodos GET
    public function setNome($string){
        return $this->nome = $string;
    }
    public function setCpf($string){
        return $this->cpf = $string;
    }
    public function setEmail($string){
        return $this->email = $string;
    }
    public function setSenha($string){
        return $this->senha = $string;
    }
    public function setBonus($string){
        return $this->bonus = $string;
    }

    public function incluir(){
        $novoCliente = new clienteDAO();
        return $novoCliente->incluir($this);
    }

    public function logar($cpf, $senha){
        $novoCliente = new clienteDAO();
        return $novoCliente->logar($cpf, $senha);
    }

}


?>