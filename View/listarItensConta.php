<?php
// Conectando ao banco de dados: 
include_once("../Model/conexao.php");
// Criando tabela e cabeçalho de dados:



$minhaConexao2 = Conexao::getConnection();


$sql2 = $minhaConexao2->prepare("SELECT itenspedidos.nome, itenspedidos.quantidade, itenspedidos.preco, itenspedidos.precoUnit FROM (itenspedidos INNER JOIN pedidos ON itenspedidos.pedidoId = pedidos.Id) WHERE pedidos.contaId = :c");
$sql2->bindParam("c", $_SESSION['contaId']);
$sql2->execute();



$resultado2 = $sql2->setFetchMode(PDO::FETCH_ASSOC);
// Obtendo os dados por meio de um loop while
while ($registro2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
     $quantidade = $registro2['quantidade'];
     $nome = $registro2['nome'];
     $precoUnit = $registro2['precoUnit'];
     $preco = $registro2['preco']; ?>

     <tr>
          <td><?php echo $nome ?></td>
          <td><?php echo $quantidade ?></td>
          <td><?php echo $precoUnit ?></td>
          <td><?php echo $preco ?></td>

     </tr>

<?php }

?>