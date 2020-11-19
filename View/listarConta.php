<?php
// Conectando ao banco de dados: 
include_once("../Model/conexao.php");
// Criando tabela e cabeçalho de dados:



  $minhaConexao = Conexao::getConnection();

            
            $sql = $minhaConexao->prepare("SELECT * FROM conta WHERE status = 0 AND clienteId= :c");
            $clienteId = $_SESSION['id_usuario'];
            $sql->bindParam("c",$clienteId);
            $sql->execute();
 


 $resultado = $sql->setFetchMode(PDO::FETCH_ASSOC);
 // Obtendo os dados por meio de um loop while
 while ($registro = $sql->fetch(PDO::FETCH_ASSOC))
 {
    $valorConta = $registro['valorConta'];  
    $contaId = $registro['id_conta'];  

?>
  
  <?php
               include ('listarItensConta.php');
                ?>
                <tbody>
                <tr>
                    <?php $valorFinal = $valorConta - $_SESSION['bonus']?>
                                            <td></td>
                                            <td></td>
                                            <td><strong></strong></td>
                                            <td ><strong>R$<?php echo number_format($valorConta, 2, ',', '.') ?></strong></td>
                                            
                                          
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
                                            <td ><strong>R$<?php echo number_format($valorFinal, 2, ',', '.') ?></strong></td>
                                            
                                          
                                        </tr>

                                        </tbody>
                                   
                                   </table>
                                   
                               </div>
                               <div class="row justify-content-md-center">
                                   <div class="col-md-4 button">
                                       <button type="button" class="btn btn-warning btn-block mt-1 mb-3"><a class="text-body" href="logado.php">Voltar para cardápio</a></button>
                                   </div>
                                   <div class="col-md-4 button">
                                       <button onclick="alert('Conta paga! Obrigado pela sua visita, volte sempre!')" class="btn btn-warning btn-block mt-1 mb-3"><a class="text-body" href='../Controller/contaController.php?acao=pagar&contaId=<?php echo $contaId?>&valorFinal=<?php echo $valorFinal?>'>Pagar conta</a></button>
                                   </div>
                               </div>
                                        

<?php
   
    
 }
 
 
 ?>