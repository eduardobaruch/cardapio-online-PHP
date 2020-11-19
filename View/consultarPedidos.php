<?php
// Conectando ao banco de dados: 
include_once("../Model/conexao.php");
// Criando tabela e cabeçalho de dados:



$minhaConexao = Conexao::getConnection();


$sql = $minhaConexao->prepare("SELECT Id FROM pedidos WHERE status = 0");
$sql->execute();



$resultado = $sql->setFetchMode(PDO::FETCH_ASSOC);
// Obtendo os dados por meio de um loop while
while ($registro = $sql->fetch(PDO::FETCH_ASSOC)) {
    $id = $registro['Id'];

?>
    <div class="container card bg-light mt-1">
        <div class="row">
            <div class="col-md-10">
                <?php
                include('consultarItensPedidos.php');
                ?>

            </div>
            <div class="col-md-2 my-auto d-flex flex-column">
                <h5 class="text-center">Pedido <?php echo $id ?></h5>


                <?php echo "<a class='btn btn-warning float-right mb-2' href='../Controller/pedidoController.php?acao=pronto&id=" . $id . "'>Pronto!</a>" ?>
            </div>
        </div>
    </div>





<?php


}


?>