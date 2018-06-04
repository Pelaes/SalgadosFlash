<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salgados Flash</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        .imgCarr{
            width : 350px;
            height : 350px;
        }
    </style>
</head>

<body>
    <?php
        session_start();
        include 'cabecalho.php';
    ?>
    <div class="carousel-item active">
        <img src="imagens/salgados1.png" alt="salgados" class="img-fluid d-block">
        <div class="carousel-caption text- d-none d-xl-block">
            <h1 class="display-1">BEM-VINDO A SALGADOS FLASH</h1>
            <h3 class="display-3">O melhor salgado da região</h3>
        </div>
    </div>
    <div class="text-dark d-xl-none">
        <h1 class="text-center">BEM-VINDO A SALGADOS FLASH</h1>
        <h3 class="text-center">O melhor salgado da região</h3>
    </div>

    <div>
        <br>
        <br>
        <br>
    </div>

    <!--Formulário-->
    <div class="jumbotron" id="pesquisaCEP">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h1 class="display-4">Veja se entregamos em seu endereço:</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-6 ">
                    <form action="PesquisarCep.php" method="POST">
                        <center>
                            <div class="form-row">
                                <div class="form-group col-lg-9">
                                    <input type="text" class="form-control form-control-lg" id="CEP" placeholder="Digite seu CEP" name="CEP">
                                </div>
                                <div class="form-group col-lg-3">
                                    <input type="submit" class="btn btn-primary form-control btn-lg" value="Buscar">
                                </div>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Carrossel com 3 colunas-->

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div>
                    <h1 class="text-center">
                        <a class="nav-link" href="cardapio.php#salgados">Salgados</a>
                    </h1>
                    <h5 class="text-center">Deliciosos salgados!</h5>
                </div>
                <div id="CarrosselSite" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarrosselSite" data-slide-to="0" class="active"></li>
                        <li data-target="#CarrosselSite" data-slide-to="1"></li>
                        <li data-target="#CarrosselSite" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <img src="imagens/individual.webp" class="img-fluid d-block imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/comboindividual.webp" class="img-fluid d-block imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/combofamilia.webp" class="img-fluid d-block imgCarr">
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#CarrosselSite" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#CarrosselSite" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Avançar</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <h1 class="text-center">
                        <a class="nav-link" href="cardapio.php#doces">Bolos e doces</a>
                    </h1>
                    <h5 class="text-center">Adoce seu dia!</h5>
                </div>
                <div id="CarrosselSite2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarrosselSite2" data-slide-to="0" class="active"></li>
                        <li data-target="#CarrosselSite2" data-slide-to="1"></li>
                        <li data-target="#CarrosselSite2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <img src="imagens/bolo.webp" class="img-fluid d-block imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/boloespecial.webp" class="img-fluid d-block imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/bolopasta.webp" class="img-fluid d-block imgCarr">
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#CarrosselSite2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#CarrosselSite2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Avançar</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <h1 class="text-center">
                        <a class="nav-link" href="cardapio.php#doces">Kit festa</a>
                    </h1>
                    <h5 class="text-center">Montamos sua festa!</h5>
                </div>
                <div id="CarrosselSite3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarrosselSite3" data-slide-to="0" class="active"></li>
                        <li data-target="#CarrosselSite3" data-slide-to="1"></li>
                        <li data-target="#CarrosselSite3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <img src="imagens/salgados1.png" class="img-fluid d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/salgados1.png" class="img-fluid d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="imagens/salgados1.png" class="img-fluid d-block">
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#CarrosselSite3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#CarrosselSite3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Avançar</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <br>
        <br>
        <br>
    </div>
    <div class="container">
        <div id="CarrosselSite4" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/salgados1.png" class="img-fluid d-block">
                </div>
                <div class="carousel-item">
                    <img src="imagens/salgados1.png" class="img-fluid d-block">
                </div>
                <div class="carousel-item">
                    <img src="imagens/salgados1.png" class="img-fluid d-block">
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'rodape.html';
    ?>

    <!--Incluindo arquivos de modais-->
    <?php
        include 'modal_endereco.php';
        include 'modal_indisponivel.php';
        include 'modal_campos_vazios.php';
        include 'modal_disponivel.php';
    ?>

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- Mostra modal de erro caso campo esteja vazio ou cep incorreto-->
    <?php
        if(isset($_SESSION['erro']))
        {
    ?>
        <script>
            $(document).ready(function(){
                $('#vazio').modal('show');
            }); 
        </script>
    <?php
        unset ($_SESSION['erro']); 
        }
    ?>

    <!-- Mostra modal de endereço com valores do banco-->
    <?php
        if(isset($_SESSION['local']))
        {
    ?>
        <script>
            $(document).ready(function(){
                $('#cadastro').modal('show');
            }); 
        </script>
    <?php
        unset ($_SESSION['local']); 
        }
    ?>

    <!-- Mostra modal de disponibilidade ou não-->
    <?php
        if(isset($_SESSION['disponivel']))
        {
    ?>
        <script>
            $(document).ready(function(){
                $('#valido').modal('show');
            }); 
        </script>
    <?php
        unset ($_SESSION['disponivel']); 
        }
    ?>

    <?php
        if(isset($_SESSION['indisponivel']))
        {
    ?>
        <script>
            $(document).ready(function(){
                $('#invalido').modal('show');
            }); 
        </script>
    <?php
        unset ($_SESSION['indisponivel']); 
        }
    ?>

</body>

</html>