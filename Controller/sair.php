<?php
    session_start();
    unset($_SESSION['id_usuario']);
    unset($_SESSION['carrinho']);
    unset($_SESSION['pedidoId']); 
    unset($_SESSION['contaId']); 
    header("location: ../view/index.php");

?>