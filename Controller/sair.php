<?php
    session_start();
    unset($_SESSION['id_usuario']);
    unset($_SESSION['carrinho']);
    header("location: ../view/index.php");1

?>