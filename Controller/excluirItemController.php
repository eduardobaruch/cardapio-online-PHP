<?php
    session_start();
    if((!isset($_SESSION['id_usuario'])) || ($_SESSION['poder'] < 2))
    {
        header("location: ../Controller/sair.php");
        exit;
    }
    else 
    {
        // Conectando ao banco de dados: 
include_once("../Model/conexao.php");




  $minhaConexao = Conexao::getConnection();

    $id = $_GET['id'];       
    $sql = $minhaConexao->prepare("DELETE FROM itens WHERE id_item = '$id'");
    $sql->execute();
 
    echo "<script>alert('Registro deletado com sucesso!');document.location='../view/consultaProdutos.php'</script>";
    }
        
?>





 
    
 
 
 
 ?>