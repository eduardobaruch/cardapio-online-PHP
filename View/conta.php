<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- LINK PARA ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>EVA Lanches</title>
    <link rel="icon" href="../imagens/icon.png">
</head>

<body background="../imagens/hamburgerbg.jpg" style="padding-bottom: 70px;">

   <!-- NAVBAR -->
   <?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
       include ('template/menu.php');
        
    }
    else 
    {
        include ('template/menuLogado.php');
    }
        
?>


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <!-- COMIDAS -->
                <div class="card bg-warning text-white card-body">VISUALIZAÇÃO DA CONTA</div>

                <!-- FORMULARIO -->
                <div class="container card bg-light mt-1">
                    
                           
                        
                        <div class="card-body">
                            
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Produto:</th>
                                            <th>Qtd:</th>
                                            <th>Preço Unit:</th>
                                            <th>Valor:</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
               include ('listarConta.php');
                ?>
                                       
                                   


                       
                                        
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-4 button">
                                    <button type="button" class="btn btn-warning btn-block mt-1 mb-3"><a class="text-body" href="logado.php">Voltar para cardápio</a></button>
                                </div>
                                <div class="col-md-4 button">
                                    <button onclick="alert('Conta paga! Obrigado pela sua visita, volte sempre!')" class="btn btn-warning btn-block mt-1 mb-3"><a class="text-body" href="../Controller/sair.php">Pagar conta</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
    
    <!-- Footer -->
    <footer class="footer fixed-bottom font-small bg-warning mt-2">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 font-weight-bold">Criado por Eduardo, Victor e Alcyr. © 2020
            Copyright: EVA Lanches</div>
    </footer>


</body>

</html>