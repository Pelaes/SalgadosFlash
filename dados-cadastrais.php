<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Salgados Flash</title>

</head>

<body>
    <?php
        session_start();
        include 'cabecalho.php';
    ?>
    <div class="container">
        <h3 class="mt-3">Meu Perfil</h3>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Informações Pessoais</li>
            </ol>
        </div>

        <form>
            <div class="form-row">
                <div class="form-group col-lg-8 mr-auto ml-auto">
                    <input type="text" class="form-control form-control-lg" id="nome" value="<?php echo $_SESSION['nome']?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-8 mr-auto ml-auto">
                    <input type="text" class="form-control form-control-lg" id="email" value="<?php echo $_SESSION['email']?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-2 ml-auto">
                    <input type="text" class="form-control form-control-lg" id="ddd" value="<?php echo $_SESSION['ddd']?>">
                </div>
                <div class="form-group col-lg-6 mr-auto">
                    <input type="text" class="form-control form-control-lg" id="telefone" value="<?php echo $_SESSION['telefone']?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-8 mr-auto ml-auto">
                    <input type="text" class="form-control form-control-lg" id="senha" placeholder="Digite seu CPF/CNPJ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-4 ml-auto">

                </div>
                <div class="form-group col-lg-4 mr-auto">
                    <input type="submit" class="form-control btn btn-primary btn-lg" value="Salvar alterações">
                </div>
            </div>
        </form>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Senha</li>
            </ol>
        </div>
        <form>
            <div class="form-row">
                <div class="form-group col-lg-8 mr-auto ml-auto">
                    <input type="text" class="form-control form-control-lg" id="senha" placeholder="Senha atual">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-8 mr-auto ml-auto">
                    <input type="text" class="form-control form-control-lg" id="senha" placeholder="Nova senha">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-8 ml-auto mr-auto">
                    <input type="text" class="form-control form-control-lg" id="novasenha" placeholder="Confirme a senha">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-4 ml-auto">

                </div>
                <div class="form-group col-lg-4 mr-auto">
                    <input type="submit" class="form-control btn btn-primary btn-lg" value="Salvar nova senha">
                </div>
            </div>
        </form>
    </div>

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>