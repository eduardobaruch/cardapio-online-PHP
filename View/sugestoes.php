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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>EVA Lanches</title>
    <link rel="icon" href="../imagens/icon.png">

  
</head>

<body background="../imagens/hamburgerbg.jpg" style="padding-bottom: 70px;">

    <!-- COMIDAS -->
    <?php
    session_start();
    if (!isset($_SESSION['id_usuario'])) {
        include('template/menu.php');
    } else {
        include('template/menuLogado.php');
    }

    ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <!-- COMIDAS -->
                <div class="card bg-warning text-white card-body">FALE COM O DONO</div>

                <!-- FORMULARIO -->
                <div class="container card bg-light mt-1">
                    <form class="mt-2" action="" method="POST" name="sugestao">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input class="form-control" type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea class="form-control" type="text" id="mensagem" name="mensagem" required></textarea>
                        </div>


                        <div class="row justify-content-md-center">
                            <div class="col-md-4 button">
                                <button onclick="alert('Obrigado pela sua sugestão!')" type="submit" class="btn btn-warning btn-block mt-1 mb-3">Enviar</button>
                            </div>
                        </div>
                </div>

                </form>
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