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
    else if($acao == "mais") {
       
                    updateCart($_GET['id'], $_GET['quant']+1);    
        header("location: logado.php");
    }
    else if($acao == "menos") {
       
        updateCart($_GET['id'], $_GET['quant']-1);    
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
                        <div class="col-sm-9 col-9 col-md-9">
                            <h7 class="mt-1">


                            <div class="d-flex flex-nowrap align-content-stretch">
                            <div class = "border rounded border-dark">
  <a class="p-1 ml-1 text-dark "href="carrinho.php?acao=menos&id=<?php echo $result['id']?>&quant=<?php echo $result['quantity']?>">-</a>
  <span class="p-1 "><?php echo $result['quantity']?></span>
  <a class="p-1 text-dark "href="carrinho.php?acao=mais&id=<?php echo $result['id']?>&quant=<?php echo $result['quantity']?>">+</a>
  </div>
  <span class="p-1"><?php echo $result['name']?></h7></span>
</div>

                                              
                            
                        </div>
                        <div class="col-sm-3 col-3 col-md-3">
                            <p>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?> </p>
                        </div>
                    </div>
                    
				<?php endforeach;?>
				
				  <!-- CARRINHO TOTAL -->
                  <div class="container" style="background-color: #c9bfbf">
                <div class="row p-1">
                        <div class="col-9">
                            <h7 class="mt-1"><strong>TOTAL</strong> </h7>
                            
                        </div>
                        <div class="col-3 my-auto">
                            <strong>R$<?php echo number_format($totalCarts, 2, ',', '.')?> </strong>
                        </div>
                    </div>
                    
                </div>
                </div>
                <div class="row rounded justify-content-center bg-light p-2 mt-1">
                    <?php echo "<a class='btn btn-secondary mr-2 mb-2 mt-1' href='../Controller/pedidoController.php?acao=cadastrar&clienteId=".$_SESSION['id_usuario']."&valorTotal=".$totalCarts."'>FAZER PEDIDO</a>"?>
                    <button type="button" class="btn btn-success mb-2 mt-1"><a href="conta.php"><span class="text-white"> VISUALIZAR CONTA</span></a></button>
                    </div>


                <!-- CARRINHO PAGAMENTO -->
                <?php else: ?>
                    <div class="container" style="background-color: #c9bfbf">
                    <div class="row justify-content-center carrinho-vazio">
                        <p><br><br><br><br>seu carrinho esta vazio <br><br><br><br><br></p>
                    </div>
                </div>

                <div class="row rounded justify-content-center bg-light p-2 mt-1">
                   
                    <button type="button" class="btn btn-success mb-2 mt-1"><a href="conta.php"><span class="text-white"> VISUALIZAR CONTA</span></a></button>
                    </div>
                    
                    </div>
    
			
    <?php endif ?>
		
   
