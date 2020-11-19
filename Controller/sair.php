<?php
    session_start();
    if(!isset($_SESSION['contaId']))
    {
        unset($_SESSION['id_usuario']);
        unset($_SESSION['carrinho']);
        unset($_SESSION['pedidoId']); 
        unset($_SESSION['contaId']); 
        unset($_SESSION['bonus']);
        header("location: ../view/index.php");
       
    }
    else 
    {
        echo "<script language=javascript>alert( 'Você deve pagar a conta antes de sair!' );</script>";
        echo '<script type="text/javascript">window.location.href = "../view/conta.php";</script>';
        exit;
    }
