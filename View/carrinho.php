<?php 
	
	require_once "../Model/pedidoDAO.php";
	require_once "../Model/pedido.php";
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
               // $preco = $product['preco'];
                $quantidade = $result['quantity'];
                $preco = $result['subtotal'];
                $novoItem = new Item($nome, $preco, $quantidade, $_SESSION['id_usuario']);
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

			
	<?php endif?>
		
	
	
