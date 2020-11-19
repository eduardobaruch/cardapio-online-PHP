<?php


$acao =  $_GET["acao"];
require_once "../Model/pedido.php";

if ($acao == "cadastrar") {

        $valorTotal =  $_GET["valorTotal"];
        $contaId =  $_GET["contaId"];

        $novoPedido = new Pedido($contaId, $valorTotal);
        $novoPedido->incluir();

        header("location: ../View/carrinho.php?acao=finalizar");
        exit;
} else if ($acao == "pronto") {

        $id =  $_GET["id"];
        $pedidoPronto = new Pedido($id, 0);

        $pedidoPronto->pedidoPronto($id);
        header("location: ../View/cozinha.php");
}
