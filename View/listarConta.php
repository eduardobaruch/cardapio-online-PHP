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

?>
  
  <?php
               include ('listarItensConta.php');
                ?>
                <tr>
                                            <td></td>
                                            <td></td>
                                            <td><strong>TOTAL:</strong></td>
                                            <td><strong><?php echo $valorConta ?></strong></td>
                                          
                                        </tr>

<?php
   
    
 }
 
 
 ?>