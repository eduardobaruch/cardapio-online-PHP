<?php

require_once "../Model/cliente.php";

class ClienteController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cliente();
        $this->cadastrarCliente();
    }   

    public function cadastrarCliente(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setCpf($_POST['cpf']);
        $this->cadastro->setEmail($_POST['email']);
        $this->cadastro->setSenha($_POST['senha']);

        $clienteDao = new ClienteDAO();
    $clienteDao->incluir($nome,$cpf,$email,$senha);
}
}