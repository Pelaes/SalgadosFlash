<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salgados Flash</title>
    <link rel="stylesheet" href="./css/estilo.css">

</head>

<body>
    <!-- Barra de navegação - INICIO-->
    <?php
            session_start();
            include 'cabecalho.php';
            include 'modal_campos_vazios.php';
        ?>
    <!-- Barra de navegação - FIM-->

    <!-- Jumbotron de menu - INICIO-->
    <div class="jumbotron jumbotron-fluid" id="salgados">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4">Porções e Salgados</h1>
                    <p class="lead">Produtos fritos, prontos para consumo, com prazo de até 55 minutos para chegar em sua casa. São 6 deliciosos
                        sabores a sua escolha, sendo: COXINHAS, RISOLES, BOLINHAS DE QUEIJO, BOLINHAS DE CARNE, BOLINHAS
                        DE CALABRESA e ENROLADINHOS DE SALSICHA que irão marcar o seu paladar!
                    </p>
                    <hr>
                    <a href="#doces" class="nav-link">
                        <p class="lead">CLIQUE AQUI PARA DOCES</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron de menu - FIM-->

    <!-- Cards de cardapio - INICIO-->
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/individual.webp">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Individual</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">São 25 unidades de mini salgados fritos, sortidos.
                            <br>
                            <br>
                        </h6>
                        <br>
                        <form action="add_item.php">
                            <button class="btn btn-outline-success btn-block card-link">
                                <label class="mr-3 mt-2">R$ 12,90</label>
                                <img src="imagens/carrinho.png" alt="Carrinho de compras">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/eumais1.webp">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Eu mais 1</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">São 50 unidades de mini salgados fritos, sortidos.
                            <br>
                            <br>
                        </h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2 text-center">R$ 19,90</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/familia.webp">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Família</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">São 100 unidades de salgados fritos, sortidos.
                            <br>
                            <br>
                        </h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2">R$ 37,90</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/comboindividual.webp">
                    <div class="card-body align-center">
                        <h4 class="card-title text-center mb-2">Combo Individual</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">Combo Flash Individual 25 salgados + refrigerante lata 350ml.</h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2">R$ 17,90</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/ComboEumais1.webp">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Combo Eu mais 1 até 2</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">Combo Flash Eu mais 1 até 2, 50 salgados + 10 mini churros + 1 refrigerante 600 ml.</h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2">R$ 29,90</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/Combofamilia.webp">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Combo Família
                            <br>
                            <br>
                        </h4>
                        <br>
                        <h6 class="card-subtitle text-justify">Combo Flash Familía, 100 salgados + 25 mini churros + refrigerante de 2 litros.
                            <br>
                            <br>
                        </h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2">R$ 59,90</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/minichoc.jpg">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Mini Churros de Chocolate</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">São 25 unidades de mini churros fritos, com recheio de chocolate.
                            <br>
                            <br>
                        </h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2">R$ 12,90</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/Churrosleite.webp">
                    <div class="card-body align-center">
                        <h4 class="card-title text-center mb-2">Mini Churros de Doce de Leite</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">São 25 unidades de mini churros fritos, com recheio de doce de leite.
                            <br>
                            <br>
                        </h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2">R$ 12,90</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards de cardapio - FIM-->

    <!-- Jumbotron de menu - INICIO-->
    <div class="jumbotron jumbotron-fluid" id="doces">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4">Encomendas</h1>
                    <p class="lead">Bolos, docinhos e salgados para animar sua festa ou confraternização. Faça suas encomendas com no mínimo
                        3 dias de antecedência e fique tranquilo que faremos tudo para você!
                    </p>
                    <hr>
                    <a href="#salgados" class="nav-link">
                        <p class="lead">CLIQUE AQUI PARA SALGADOS</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron de menu - FIM-->

    <!-- Cards de cardapio - INICIO-->
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-lg-4 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" height="347px" src="imagens/doces.webp">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Doces</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">Beijinhos, brigadeiros ou bicho de pé. 100 unidades.
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2">R$ 50,00</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/bolo.webp">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Bolos</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">Bolos de diversos sabores. Temos abacaxi com creme, doce de leite, ameixa com creme, doce de leite,
                            chocolate, prestígio, brigadeiro, mousse de chocolate, morango, maracujá e limão. Preço por kilo.</h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2 text-center">R$ 50,00</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card h-100">
                    <img class="card-img-top" src="imagens/boloespecial.webp">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Bolos Especiais</h4>
                        <br>
                        <h6 class="card-subtitle text-justify">Maravilhosos bolos com frutas da época e oleaginosas. Preço por kilo
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </h6>
                        <br>
                        <a href="#" class="btn btn-outline-success btn-block card-link">
                            <label class="mr-3 mt-2">R$ 70,00</label>
                            <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'rodape.html';
    ?>

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <?php
        if(isset($_SESSION['erro']))
        {
    ?>
    <script>
        $(document).ready(function () {
            $('#vazio').modal('show');
        }); 
    </script>
    <?php
        unset ($_SESSION['erro']); 
        }
    ?>

</body>

</html>