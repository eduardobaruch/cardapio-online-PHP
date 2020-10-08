<?php


require_once "../Model/cliente.php";

   
    $cpf = addslashes($_POST['cpf']);
    $senha = addslashes($_POST['senha']);

//Verificando se todos os campos estao preenchidos
if(!empty($cpf) && !empty($senha)) {
    $novologin = new Cliente(0, $cpf, 0, $senha);
    
    
$resposta = $novologin->logar($cpf, $senha);

if(($cpf == 'gerente') && ($senha == 'poderoso')) {
    echo  "<script>alert('Logado como Gerente!');</script>";
    header("location: ../View/cadastroComida.php");
}
elseif(($cpf == 'cozinha') && ($senha == 'evalanches')) {
    echo  "<script>alert('Logado como Gerente!');</script>";
    header("location: ../View/cozinha.php");
}

elseif($resposta) {
    
    header("location: ../View/logado.php");
}
else {
    echo  "<script>alert('CPF e/ou senha incorretos!');</script>";
    echo '<script type="text/javascript">window.location.href = "../index.php";</script>';
}
}
else {
    echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
    echo '<script type="text/javascript">window.location.href = "../view/index.php";</script>';
}