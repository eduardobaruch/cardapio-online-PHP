<?php


require_once "../Model/cliente.php";


   
    $cpf = addslashes($_POST['cpf']);
    $senha = addslashes($_POST['senha']);

//Verificando se todos os campos estao preenchidos
if(!empty($cpf) && !empty($senha)) {
    $novologin = new Cliente(0, $cpf, 0, $senha);
    
    
$resposta = $novologin->logar($cpf, $senha);

if($resposta) {
    $poder = $_SESSION['poder'];
    if($poder == 2){
        header("location: ../View/cadastrocomida.php");
    }
    elseif($poder == 1){
        header("location: ../View/cozinha.php");
    }
    else {
        header("location: ../View/logado.php");       
    }
}

else {
    echo  "<script>alert('CPF e/ou senha incorretos!');</script>";
    echo '<script type="text/javascript">window.location.href = "../view/index.php";</script>';
}
}
else {
    echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
    echo '<script type="text/javascript">window.location.href = "../view/index.php";</script>';
}