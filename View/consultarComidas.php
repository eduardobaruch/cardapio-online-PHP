<?php
// Conectando ao banco de dados: 
include_once("../Model/conexao.php");
// Criando tabela e cabeçalho de dados:



$minhaConexao = Conexao::getConnection();

            
$sql = $minhaConexao->prepare("SELECT * FROM itens WHERE tipo = 'comida'");
$sql->execute();
 


 $resultado = $sql->setFetchMode(PDO::FETCH_ASSOC);
 // Obtendo os dados por meio de um loop while
 while ($registro = $sql->fetch(PDO::FETCH_ASSOC))
 {
    $id = $registro['id_item'];
    $nome = $registro['nome'];
    $descricao = $registro['descricao'];
    $preco = $registro['preco'];

?>
     <div class="container card bg-light mt-1">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="mt-1"><?php echo $nome ?></h5>
                            <h5 class="mt-1 float-right my-auto">R$<?php echo $preco ?></h5>
                            <ul>
                                <li class="small"><?php echo $descricao ?></li>
                            </ul>
                        </div>
                        <div class="col-md-2 my-auto">
                        <form method="POST" action="../Controller/itemController.php">
                        <input type="hidden" name="acao" value="excluir">
                        <input type="hidden" name="id" value="<?php echo $id?>" id="acao">
                        <button type="submit" class='btn btn-danger float-right mr-1 mt-1'>Excluir</button></form>
                           
                           <?php echo "<a class='btn btn-primary float-right mr-1 mt-1 mb-1' href='../view/editarcomida.php?id=".$id."&nome=".$nome."&descricao=".$descricao."&preco=".$preco."'>Editar</a>"?>
                        </div>
                    </div>
                </div>

<?php
   
    
 }
 
 
 ?>