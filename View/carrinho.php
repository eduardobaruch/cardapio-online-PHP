<?php 
	session_start();
	require_once "../Model/pedidoDAO.php";
	require_once "../Model/pedido.php";
    require_once "../Model/conexao.php";
	$pdoConnection = Conexao::getConnection();

    

    if(isset($_GET['acao'])) {
		$acao = $_GET['acao'];
    if($acao == 'add') {
        addCart($_GET['id'], 1);
    }
    elseif ($acao == 'del') {
        deleteCart($_GET['id']);
    }

    elseif ($acao == 'up') {
        if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
            foreach($_POST['prod'] as $id => $qtd){
                    updateCart($id, $qtd);
            }
        }
    }
}
	
		
	
	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

</head>
<body>
	<div class="container">
		
		<?php if($resultsCarts) : ?>
			<form action="carrinho.php?acao=up" method="post">
			<table class="table table-strip">
				<thead>
					<tr>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Subtotal</th>
						<th>Ação</th>

					</tr>				
				</thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						
						<td><?php echo $result['name']?></td>
						<td>
							<input type="text" name="prod[<?php echo $result['id']?>]" value="<?php echo $result['quantity']?>" size="1" />
														
							</td>
						<td>R$<?php echo number_format($result['price'], 2, ',', '.')?></td>
						<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
						<td><a href="carrinho.php?acao=del&id=<?php echo $result['id']?>" class="btn btn-danger">Remover</a></td>
						
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 	<td></td>
				 </tr>
				</tbody>
				
			</table>

			
	<?php endif?>
		
	</div>
	
</body>
</html>