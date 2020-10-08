<?php


require_once "../Model/bebida.php";
require_once "../Model/item.php";

    $nome = addslashes($_POST['nome']);
    $fornecedor = addslashes($_POST['fornecedor']);
    $preco = addslashes($_POST['preco']);
    

//Verificando se todos os campos estao preenchidos
if(!empty($nome) && !empty($fornecedor) && !empty($preco)) {
$novaBebida = new Bebida($nome, $fornecedor, $preco);

$resposta = $novaBebida->incluir();

        echo "<script language=javascript>alert( 'Cadastrado com sucesso!' );</script>";
        echo '<script type="text/javascript">window.location.href = "../view/cadastrobebida.php";</script>';
}

else {
    echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
    echo '<script type="text/javascript">window.location.href = "../view/cadastrobebida.php";</script>';
    
}