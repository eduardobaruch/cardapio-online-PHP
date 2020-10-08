<?php


require_once "../Model/comida.php";
require_once "../Model/item.php";

    $id = addslashes($_POST['id']);
    $nome = addslashes($_POST['nome']);
    $descricao = addslashes($_POST['descricao']);
    $preco = addslashes($_POST['preco']);
    

//Verificando se todos os campos estao preenchidos
if(!empty($nome) && !empty($descricao) && !empty($preco) && !empty($id)) {
$editaComida = new Comida($nome, $descricao, $preco);
$editaComida->setId($id);


$resposta = $editaComida->editar();

        echo "<script language=javascript>alert( 'Comida editada com sucesso!' );</script>";
        echo '<script type="text/javascript">window.location.href = "../view/consultaProdutos.php";</script>';
}

else {
    echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
    echo '<script type="text/javascript">window.location.href = "../view/consultaProdutos.php";</script>';
    
}