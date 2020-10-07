<?php
    require_once '../Model/bebidas.php';
    $u = new Bebida;

?>


<?php
//verificar se clicou no botao
if (isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $fornecedor = addslashes($_POST['fornecedor']);
    $preco = addslashes($_POST['preco']);
    //verificar se esta preenchido
    if(!empty($nome) && !empty($fornecedor) && !empty($preco))
    {
       $u->conectar("evalanches","localhost","root","");
       if($u->msgErro == "")//vazio eh pq ta ok
       {
            //verificar se senha e confirmar senha estao iguais
           /* if ($senha == $confirmarsenha)
            {

            } */
           if ($u->cadastrar($nome, $fornecedor, $preco))
           {
            echo "<script language=javascript>alert( 'Cadastrado com sucesso!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../cadastroBebida.php";</script>';


           }
           else
           {
            echo "<script language=javascript>alert( 'Bebida ja cadastrada!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../cadastroBebida.php";</script>';

           }

       }
       else     
       {
            echo "Erro: ".$u->msgErro;
       }
    }
    else
    {
        echo "<script language=javascript>alert( 'Preencha todos os campos!' );</script>";
            echo '<script type="text/javascript">window.location.href = "../cadastroBebida.php";</script>';
    }
}

?>