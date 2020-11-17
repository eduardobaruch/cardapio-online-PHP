<?php


$acao =  $_GET["acao"];
require_once "../Model/pedido.php";

if ($acao=="cadastrar") {
    
   
// $valorTotal = addslashes($_GET['valorTotal']);
 
$valorTotal =  $_GET["valorTotal"];
$clienteId =  $_GET["clienteId"];

$novoPedido = new Pedido($clienteId, $valorTotal);

$novoPedido->incluir();


header("location: ../View/carrinho.php?acao=finalizar");

}

else if ($acao=="pronto") {
    
$id =  $_GET["id"];
$pedidoPronto = new Pedido($id, 0);

$pedidoPronto->pedidoPronto($id);
header("location: ../View/cozinha.php");

}
 