<?php 
	
	require_once "../Model/carrinhoDAO.php";
	require_once "../Model/carrinho.php";
    require_once "../Model/conexao.php";
	$pdoConnection = Conexao::getConnection();

    

    if(isset($_GET['acao'])) {
        session_start();
        $acao = $_GET['acao'];
    if($acao == "add") {
        addCart($_GET['id'], 1);
        header("location: logado.php");
    }
    elseif ($acao == 'del') {
        deleteCart($_GET['id']);
        header("location: logado.php");
    }

    elseif ($acao == 'up') {
        if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
            foreach($_POST['prod'] as $id => $qtd){
                    updateCart($id, $qtd);
                    
            }
        }
        header("location: logado.php");
    }

    else if ($acao == 'finalizar') {
        require_once ("../Model/item.php");
        
        $resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);
       
      
            foreach($resultsCarts as $result) :
               
                $nome = $result['name'];
                $quantidade = $result['quantity'];
                $preco = $result['subtotal'];
                $pedidoId =  $_SESSION['pedidoId']; 
                $novoItem = new Item($nome, $preco, $quantidade, $pedidoId);
                $novoItem->incluir();
                echo "Sua compra foi finalizada!";
            endforeach;	
                

            unset($_SESSION['carrinho']);
            echo "<script language=javascript>alert( 'Pedido realizado com sucesso, ja ja chegara em sua mesa!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../view/logado.php";</script>';
    }
}
	
		
	
	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);


?>

	<div class="container">
		
		<?php if($resultsCarts) : ?>
			                
				  <?php foreach($resultsCarts as $result) : ?>
					<div class="row p-1">
                        <div class="col-md-9">
                            <h7 class="mt-1"><a href="carrinho.php?acao=del&id=<?php echo $result['id']?>" class="">-</a><?php echo $result['quantity']?>x <?php echo $result['name']?></h7>
                            
                        </div>
                        <div class="col-md-3 my-auto">
                            <p>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?> </p>
                        </div>
                    </div>
						
						
				<?php endforeach;?>
				
				  <!-- CARRINHO TOTAL -->
                  <div class="container" style="background-color: #c9bfbf">
                <div class="row p-1">
                        <div class="col-md-9">
                            <h7 class="mt-1"><strong>TOTAL</strong> </h7>
                            
                        </div>
                        <div class="col-md-3 my-auto">
                            <strong>R$<?php echo number_format($totalCarts, 2, ',', '.')?> </strong>
                        </div>
                    </div>
                    
                </div>
                </div>
                


                <!-- CARRINHO PAGAMENTO -->
                
                
                <div class="row rounded justify-content-center bg-light p-2 mt-1">
                    <?php echo "<a class='btn btn-secondary mr-2 mb-2 mt-1' href='../Controller/pedidoController.php?acao=cadastrar&clienteId=".$_SESSION['id_usuario']."&valorTotal=".$totalCarts."'>FAZER PEDIDO</a>"?>

			
    <?php endif
    
    ?>
		
	
	
