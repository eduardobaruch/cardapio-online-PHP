<?php
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario;

?>


<?php
//verificar se clicou no botao
if (isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $cpf = addslashes($_POST['cpf']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    //verificar se esta preenchido
    if(!empty($nome) && !empty($cpf) && !empty($email) && !empty($senha))
    {
       $u->conectar("evalanches","localhost","root","");
       if($u->msgErro == "")//vazio eh pq ta ok
       {
            //verificar se senha e confirmar senha estao iguais
           /* if ($senha == $confirmarsenha)
            {

            } */
           if ($u->cadastrar($nome, $cpf, $email, $senha))
           {
            echo "<script language=javascript>alert( 'Cadastrado com sucesso!' );</script>";
            echo '<script type="text/javascript">window.location.href = "index.php";</script>';


           }
           else
           {
            echo "<script language=javascript>alert( 'CPF ja cadastrado!' );</script>";
            echo '<script type="text/javascript">window.location.href = "index.php";</script>';

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
            echo '<script type="text/javascript">window.location.href = "index.php";</script>';
    }
}

?>