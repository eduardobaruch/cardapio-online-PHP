<?php


require_once "../Model/cliente.php";

    $nome = addslashes($_POST['nome']);
    $cpf = addslashes($_POST['cpf']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

//Verificando se todos os campos estao preenchidos
if(!empty($nome) && !empty($cpf) && !empty($email) && !empty($senha)) {
$novoCliente = new Cliente($nome, $cpf, $email, $senha);

$resposta = $novoCliente->incluir();

if($resposta > 0) {
        echo "<script language=javascript>alert( 'Cadastrado com sucesso!' );</script>";
        echo '<script type="text/javascript">window.location.href = "../view/index.php";</script>';
}
else {
        echo "<script language=javascript>alert( 'CPF ja cadastrado!' );</script>";
        echo '<script type="text/javascript">window.location.href = "../view/index.php";</script>';
}
}
else {
    echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
    echo '<script type="text/javascript">window.location.href = "../view/index.php";</script>';
}