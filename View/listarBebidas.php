<?php
// Conectando ao banco de dados: 
include_once("../Model/conexao.php");
// Criando tabela e cabeçalho de dados:



  $minhaConexao = Conexao::getConnection();

            
            $sql = $minhaConexao->prepare("SELECT * FROM itens WHERE tipo = 'bebida'");
            $sql->execute();
 


 $resultado = $sql->setFetchMode(PDO::FETCH_ASSOC);
 // Obtendo os dados por meio de um loop while
 while ($registro = $sql->fetch(PDO::FETCH_ASSOC))
 {
    $nome = $registro['nome'];
    $fornecedor = $registro['fornecedor'];
    $preco = $registro['preco'];

?>
    <div class="container card bg-light mt-1">
    <div class="row">
        <div class="col-md-9">
            <h5 class="mt-1"><?php echo $nome ?></h5>
            <h5 class="float-right my-auto text-right">R$<?php echo $preco ?></h5>
            <ul>
                <li class="small"><?php echo $fornecedor ?></li>
            </ul>
        </div>
        <div class="col-md-3 my-auto">
            <button type="button" class="btn btn-warning float-right">Eu Quero!</button>
        </div>
    </div>
</div>

<?php
   
    
 }
 
 
 ?>