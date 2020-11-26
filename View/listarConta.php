<?php
// Conectando ao banco de dados: 
include_once("../Model/conexao.php");
// Criando tabela e cabeçalho de dados:



$minhaConexao = Conexao::getConnection();


$sql = $minhaConexao->prepare("SELECT * FROM conta WHERE status = 0 AND clienteId= :c");
$clienteId = $_SESSION['id_usuario'];
$sql->bindParam("c", $clienteId);
$sql->execute();



$resultado = $sql->setFetchMode(PDO::FETCH_ASSOC);
// Obtendo os dados por meio de um loop while
while ($registro = $sql->fetch(PDO::FETCH_ASSOC)) {
    $valorConta = $registro['valorConta'];
    $contaId = $registro['id_conta'];
    $valorFinal = $valorConta - $_SESSION['bonus'];
    $bonusGerado = $valorFinal * 0.1;
?>

    <?php
    include('listarItensConta.php');
    ?>
    <tbody>
        <tr>

            <td></td>
            <td></td>
            <td><strong></strong></td>
            <td><strong>R$<?php echo number_format($valorConta, 2, ',', '.') ?></strong></td>


        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><strong>Bonus:</strong></td>
            <td><strong>-<?php echo number_format($_SESSION['bonus'], 2, ',', '.') ?></strong></td>


        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><strong>TOTAL:</strong></td>
            <td><strong>R$<?php echo number_format($valorFinal, 2, ',', '.') ?></strong></td>


        </tr>

    </tbody>

    </table>

    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-4 button">
            <button type="button" class="btn btn-warning btn-block mt-1 mb-3"><a class="text-body" href="logado.php">Voltar para cardápio</a></button>
        </div>
        <div class="col-md-4 button">
            <button class="btn btn-warning btn-block mt-1 mb-3"><a class="text-body" data-toggle="modal" data-target="#modalConta" href="#">Pagar conta</a></button>
        </div>
    </div>

    <!--MODAL DE DEBITO OU CREITO-->
    <div class="modal" id="modalConta">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- MODAL HEADER -->
                <div class="modal-header">
                    <h4 class="modal-title">Formas de Pagamento</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>



                <!-- MODAL BODY -->
                <img src="../imagens/cartoes.png" alt="logo" width="100%" height="">
            


                        <!-- MODAL FOOTER -->
                        <div class="modal-footer d-flex justify-content-center">
                        <button onclick="alert('Conta paga! Obrigado pela sua visita, volte sempre! Foi gerado um bonus de R$<?php echo number_format($bonusGerado, 2, ',', '.') ?> para o seu proximo pedido.')" class="btn btn-warning mr-2"><a class="text-body" href='../Controller/contaController.php?acao=pagar&contaId=<?php echo $contaId ?>&valorFinal=<?php echo $valorFinal ?>&bonus=<?php echo $bonusGerado ?>'>Cartão de Crédito</a></button>
                        
                        <button onclick="alert('Conta paga! Obrigado pela sua visita, volte sempre! Foi gerado um bonus de R$<?php echo number_format($bonusGerado, 2, ',', '.') ?> para o seu proximo pedido.')" class="btn btn-warning ml-2"><a class="text-body" href='../Controller/contaController.php?acao=pagar&contaId=<?php echo $contaId ?>&valorFinal=<?php echo $valorFinal ?>&bonus=<?php echo $bonusGerado ?>'>Cartão de Débito</a></button>
                        </div>
                    
                
            </div>
        </div>
    </div>
<?php


}


?>