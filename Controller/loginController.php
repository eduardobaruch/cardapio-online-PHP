<?php


require_once "../Model/cliente.php";

   
    $cpf = addslashes($_POST['cpf']);
    $senha = addslashes($_POST['senha']);

//Verificando se todos os campos estao preenchidos
if(!empty($cpf) && !empty($senha)) {
    $novologin = new Cliente(0, 0, 0, 0);
$novologin->setCpf = $cpf;
$novologin->setSenha = $senha;



$resposta = $novoCliente->logar();

if($resposta > 0) {
        echo "<script language=javascript>alert( 'Cadastrado com sucesso!' );</script>";
        echo '<script type="text/javascript">window.location.href = "../index.php";</script>';
}
else {
        echo "<script language=javascript>alert( 'CPF ja cadastrado!' );</script>";
        echo '<script type="text/javascript">window.location.href = "../index.php";</script>';
}
}
else {
    echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
    echo '<script type="text/javascript">window.location.href = "../index.php";</script>';
}