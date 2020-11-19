<?php
// Conectando ao banco de dados: 
include_once("../Model/conexao.php");
// Criando tabela e cabeçalho de dados:



$minhaConexao2 = Conexao::getConnection();


$sql2 = $minhaConexao2->prepare("SELECT nome, quantidade, preco, pedidoId FROM itenspedidos where pedidoId = '$id'");
$sql2->execute();



$resultado2 = $sql2->setFetchMode(PDO::FETCH_ASSOC);
// Obtendo os dados por meio de um loop while
while ($registro2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
   $quantidade = $registro2['quantidade'];
   $nome = $registro2['nome']; ?>

   <h5 class="mt-1"><span><?php echo $quantidade ?>x - </span><?php echo $nome ?></h5>
   <ul>
      <!-- <li class="small">Lata.</li> -->
   </ul>
   <hr>
<?php }

?>