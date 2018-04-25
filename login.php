<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salgados Flash</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        .custom-control-label::before,
        .custom-control-label::after {
            top: .8rem;
            width: 1.25rem;
            height: 1.25rem;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
        include 'cabecalho.php';
    ?>
        <div class="row">

            <!--lado esquerdo-->

            <div role="main" class="col-lg-6">
                <div class="jumbotron h-100">
                    <div class="col-lg-12 text-center my-4">
                        <h1 class="display-4">Faça seu cadastro!</h1>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="col-lg-9 my-3 mx-auto">
                                <input class="form-control form-control-lg" type="text" placeholder="Digite seu nome">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9 my-3 mx-auto">
                                <input class="form-control form-control-lg" type="text" placeholder="Digite seu Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9 my-3 mx-auto">
                                <input class="form-control form-control-lg" type="text" placeholder="Digite sua senha">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9 my-3 mx-auto">
                                <input class="form-control form-control-lg" type="text" placeholder="Confirme sua senha">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-2 my-3 ml-auto">
                                <input class="form-control form-control-lg" type="text" placeholder="DDD">
                            </div>
                            <div class="form-group col-lg-7 my-3 mr-auto">
                                <input class="form-control form-control-lg" type="text" placeholder="Seu telefone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9 my-3 mx-auto">
                                <div class="custom-control form-control-lg custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="ml-2 custom-control-label" for="customCheck1"><a href="#">Li e concordo com os termos de uso.</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6 my-3 mx-auto">
                                <input class="form-control btn-lg btn btn-success" type="submit" value="Cadastrar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--lado direito-->

            <aside role="complementary" class="col-lg-6">
                <div class="jumbotron h-100">
                    <div class="col-lg-12 text-center my-4">
                        <h1 class="display-4">Já sou cadastrado!</h1>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="col-lg-9 my-3 mx-auto">
                                <input class="form-control form-control-lg" type="text" placeholder="Digite seu Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9 my-3 mx-auto">
                                <input class="form-control form-control-lg" type="text" placeholder="Digite seu senha">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-6 my-3 mx-auto">
                                <input class="form-control btn-lg btn btn-success" type="submit" value="Acessar">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12 my-3 text-center">
                                <a class="nav-link" href="#">Esqueci minha senha</a>
                            </div>
                        </div>
                    </form>
                </div>
            </aside>
        </div>




        <script src="./node_modules/jquery/dist/jquery.js"></script>
        <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>