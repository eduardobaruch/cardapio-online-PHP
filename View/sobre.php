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

    <script>
        function validarLogin() {
            
            var s1 = document.forms["formLogin"]["cpf"].value;
          var s2 = document.forms["formLogin"]["password"].value;
          
             if (s1 === '123' && s2 === 'anamaria') {
                return true;
            }
            else {
                alert ("Cpf ou senha incorretos");
                return false;
            }
      }
        
    </script>
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
    <!-- CAROUSEL -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
    <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          
        </ul>
      
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="rounded" src="../imagens/lanchonete1.jpg" alt="Los Angeles">
          </div>
          <div class="carousel-item">
            <img class="rounded" src="../imagens/lanchonete3.jpg" alt="Chicago">
          </div>
         
        </div>
      
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      
    </div>
</div>
</div>
</div>

    <!--SOBRE NÓS-->
    <div class="container card bg-light mt-4">
        <div class="row">
            <div class="col-md-12 p-4">
                <div class="intro">
                    <h1 class="text-info text-center mt-2">A EVA Lanches</h1>
                </div>
                <div class="text-muted">
                    <p>Três amigos desenvolvedores de sistema para web, resolveram juntar as paixões por programação e
                        culinária, criando a EVA Lanches, uma lanchonete
                        cheia de tecnologia e sabor.</p>
                    <p>Nossas inovações são vistas a partir do momento em que o cliente senta na mesa e se depara com um
                        cardápio virtual, acessado por tablet. Nele é possível olhar todos os itens, realizar pedidos
                        direto para a cozinha e até efetuar o pagamento da conta.</p>
                    <h2 class="text-body">Qualidade </h2>
                    <p>Nossos hamburguer são preparados com carnes de primeira, queijos de uma qualidade jamais vista,
                        molho secreto e pão artesanal. Abaixo confiram alguns de nossos destaques, lembrando que todas
                        nossas delícias levem nomes de linguagens de programação.</p>
                    <div class="row articles">
                        <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid rounded"
                                    src="../imagens/cheeseburger3.jpg" /></a>
                            <h3 class="text-body">HTML</h3>
                            <p class="description">Mais conhecido como o grande devorador de fome, eleito o melhor pelo
                                chef.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid rounded"
                                    src="../imagens/cheeseburger3.jpg" /></a>
                            <h3 class="text-body">PHP</h3>
                            <p class="description">Reconhecido pelo grande sabor do seu molho secreto, sucesso entre os
                                clientes.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid rounded"
                                    src="../imagens/cheeseburger1.jpg" /></a>
                            <h3 class="text-body">Javascript</h3>
                            <p class="description">Para os apaixonados por bacon e queijo, podem pedir que não tem erro.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>




    <!--OS DONOS-->

    <div class="container card bg-light mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="block-heading">
                    <h2 class="text-info text-center mt-2">Os donos</h2>
                    <p class="text-center text-muted">Três grandes desenvolvedores de sistema para web. <br> Fazendo um lanche incrivelmente gostoso. <br> Especialmente para você.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                src="../imagens/perfil.jpg" />
                            <div class="card-body info">
                                <h4 class="card-title">Eduardo Baruch</h4>
                                <p class="card-text text-muted">Especialista em HTML e na chapa dos grandes hamburguers.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                src="../imagens/victor.jpg" />
                            <div class="card-body info">
                                <h4 class="card-title">Victor Camargo</h4>
                                <p class="card-text text-muted">CSS e Bootstrap não é problema, faz o milkshake como ninguém.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                src="../imagens/acyr.jpg" />
                            <div class="card-body info">
                                <h4 class="card-title">Acyr Felipe</h4>
                                <p class="card-text text-muted">PHP e MySql ficaram fáceis, o grande Chef da cozinha .</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container card bg-light mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="map-clean">
                    <div class="container">
                        <div class="intro">
                            <h2 class="text-info text-center mt-2">Localização </h2>
                            <p class="text-center text-muted">A EVA Lanches tem uma localização maravilhosa esperando
                                por sua visita, confira no mapa abaixo. </p>
                        </div>
                    </div><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.1561818383393!2d-38.43582939056383!3d-12.961856083929527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9407fe176bd8bc7d!2sUnifacs!5e0!3m2!1spt-BR!2sbr!4v1601474531656!5m2!1spt-BR!2sbr"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
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