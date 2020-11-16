<?php


require_once "../Model/comida.php";
require_once "../Model/item.php";
require_once "../Model/bebida.php";




    $nome = addslashes($_POST['nome']);
    $descricao = addslashes($_POST['descricao']);
    $preco = addslashes($_POST['preco']);
    

//Verificando se todos os campos estao preenchidos
if(!empty($nome) && !empty($descricao) && !empty($preco)) {
$novaComida = new Comida($nome, $descricao, $preco);


$resposta = $novaComida->incluir();

        echo "<script language=javascript>alert( 'Cadastrado com sucesso!' );</script>";
        echo '<script type="text/javascript">window.location.href = "../view/cadastrocomida.php";</script>';
}

else {
    echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
    echo '<script type="text/javascript">window.location.href = "../view/cadastrocomida.php";</script>';
    
}