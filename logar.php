<?php
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario;

?>


<?php
//verificar se clicou no botao
if (isset($_POST['cpf']))
{
    $cpf = addslashes($_POST['cpf']);
    $senha = addslashes($_POST['senha']);
    //verificar se esta preenchido
    if(!empty($cpf) && !empty($senha))
    {
       $u->conectar("evalanches","localhost","root","");
       if($u->msgErro == "")//vazio eh pq ta ok
       {
           
           if ($u->logar($cpf, $senha))
           {
            

                header("location: logado.php");
           }
           else
           {
            echo  "<script>alert('CPF e/ou senha incorretos!');</script>";
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
        echo  "<script>alert('Preencha todos os campos!');</script>";
        echo '<script type="text/javascript">window.location.href = "index.php";</script>';
    }
}

?>