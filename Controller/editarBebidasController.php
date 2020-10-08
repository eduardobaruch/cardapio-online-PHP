<?php


require_once "../Model/bebida.php";
require_once "../Model/item.php";

    $id = addslashes($_POST['id']);
    $nome = addslashes($_POST['nome']);
    $fornecedor = addslashes($_POST['fornecedor']);
    $preco = addslashes($_POST['preco']);
    

//Verificando se todos os campos estao preenchidos
if(!empty($nome) && !empty($fornecedor) && !empty($preco) && !empty($id)) {
$editaBebida = new Bebida($nome, $fornecedor, $preco);
$editaBebida->setId($id);


$resposta = $editaBebida->editar();

        echo "<script language=javascript>alert( 'Bebida editada com sucesso!' );</script>";
        echo '<script type="text/javascript">window.location.href = "../view/consultaProdutos.php";</script>';
}

else {
    echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
    echo '<script type="text/javascript">window.location.href = "../view/consultaProdutos.php";</script>';
    
}