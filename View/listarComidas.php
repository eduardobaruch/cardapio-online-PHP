<?php
// Conectando ao banco de dados: 
include_once("../Model/conexao.php");
// Criando tabela e cabeçalho de dados:
 echo "<table border=1>";
 echo "<tr>";
 echo "<th>NOME</th>";
 echo "<th>SOBRENOME</th>";
 echo "<th>SEXO</th>";
 echo "</tr>";



  $minhaConexao = Conexao::getConnection();

            
            $sql = $minhaConexao->prepare("SELECT * FROM itens WHERE tipo = 'comida'");
            $sql->execute();
 


 $resultado = $sql->setFetchMode(PDO::FETCH_ASSOC);
 // Obtendo os dados por meio de um loop while
 while ($registro = $sql->fetch(PDO::FETCH_ASSOC))
 {
    $nome = $registro['nome'];
    $descricao = $registro['descricao'];
    $preco = $registro['preco'];
    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$descricao."</td>";
    echo "<td>".$preco."</td>";
    echo "</tr>";
 }
 
 echo "</table>";
 ?>