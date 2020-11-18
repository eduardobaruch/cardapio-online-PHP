<?php


$acao =  $_GET["acao"];
require_once "../Model/conta.php";

if ($acao=="cadastrar") {
    
   
// $valorTotal = addslashes($_GET['valorTotal']);
 
$valorTotal =  $_GET["valorTotal"];
$clienteId =  $_GET["clienteId"];

session_start();
if(!isset($_SESSION['contaId']))
    {
        $novaConta = new Conta($clienteId, $valorTotal);
        $novaConta->incluir();

      header("location: pedidoController.php?acao=cadastrar&contaId=".$_SESSION['contaId']."&valorTotal=".$valorTotal.""); 
    }
        
    else 
    {
        $contaId = $_SESSION['contaId'];
        $novaConta = new Conta($clienteId, $valorTotal);
        $novaConta->adicionarValor($contaId, $valorTotal);

        header("location: pedidoController.php?acao=cadastrar&contaId=".$_SESSION['contaId']."&valorTotal=".$valorTotal.""); 
        
}


}

else if ($acao=="pronto") {
    
$id =  $_GET["id"];
$pedidoPronto = new Pedido($id, 0);

$pedidoPronto->pedidoPronto($id);
header("location: ../View/cozinha.php");

}
 