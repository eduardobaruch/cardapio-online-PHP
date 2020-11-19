<?php

session_start();
if ((!isset($_SESSION['id_usuario'])) || ($_SESSION['poder'] < 2)) {
    header("location: ../Controller/sair.php");
    exit;
} else {


    $acao =  $_POST["acao"];

    require_once "../Model/comida.php";
    require_once "../Model/item.php";
    require_once "../Model/bebida.php";

    if ($acao == "cadastrarComida") {

        $nome = addslashes($_POST['nome']);
        $descricao = addslashes($_POST['descricao']);
        $preco = addslashes($_POST['preco']);


        //Verificando se todos os campos estao preenchidos
        if (!empty($nome) && !empty($descricao) && !empty($preco)) {
            $novaComida = new Comida($nome, $descricao, $preco);


            $resposta = $novaComida->incluir();

            echo "<script language=javascript>alert( 'Cadastrado com sucesso!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../view/cadastrocomida.php";</script>';
        } else {
            echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../view/cadastrocomida.php";</script>';
        }
    } else if ($acao == "cadastrarBebida") {

        $nome = addslashes($_POST['nome']);
        $fornecedor = addslashes($_POST['fornecedor']);
        $preco = addslashes($_POST['preco']);


        //Verificando se todos os campos estao preenchidos
        if (!empty($nome) && !empty($fornecedor) && !empty($preco)) {
            $novaBebida = new Bebida($nome, $fornecedor, $preco);

            $resposta = $novaBebida->incluir();

            echo "<script language=javascript>alert( 'Cadastrado com sucesso!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../view/cadastrobebida.php";</script>';
        } else {
            echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../view/cadastrobebida.php";</script>';
        }
    } else if ($acao == "editarComida") {

        $id = addslashes($_POST['id']);
        $nome = addslashes($_POST['nome']);
        $descricao = addslashes($_POST['descricao']);
        $preco = addslashes($_POST['preco']);


        //Verificando se todos os campos estao preenchidos
        if (!empty($nome) && !empty($descricao) && !empty($preco) && !empty($id)) {
            $editaComida = new Comida($nome, $descricao, $preco);
            $editaComida->setId($id);


            $resposta = $editaComida->editar();

            echo "<script language=javascript>alert( 'Comida editada com sucesso!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../view/consultaProdutos.php";</script>';
        } else {
            echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../view/consultaProdutos.php";</script>';
        }
    } else if ($acao == "editarBebida") {

        $id = addslashes($_POST['id']);
        $nome = addslashes($_POST['nome']);
        $fornecedor = addslashes($_POST['fornecedor']);
        $preco = addslashes($_POST['preco']);


        //Verificando se todos os campos estao preenchidos
        if (!empty($nome) && !empty($fornecedor) && !empty($preco) && !empty($id)) {
            $editaBebida = new Bebida($nome, $fornecedor, $preco);
            $editaBebida->setId($id);


            $resposta = $editaBebida->editar();

            echo "<script language=javascript>alert( 'Bebida editada com sucesso!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../view/consultaProdutos.php";</script>';
        } else {
            echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../view/consultaProdutos.php";</script>';
        }
    } else if ($acao == "excluir") {

        $id =  $_POST["id"];
        $excluirItem = new Item(0, 0, 0, 0, 0);
        $excluirItem->excluir($id);
        echo "<script>alert('Registro deletado com sucesso!');document.location='../view/consultaProdutos.php'</script>";
    }
}
