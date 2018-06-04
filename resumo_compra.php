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
    <?php
        session_start();
        include 'cabecalho.php';
    ?>
    <div>
        <h1 class='display-4 text-center my-4'>Resumo do pedido</h1>
    </div>
    <div class='jumbotron container mt-4'>
        <?php
        $aux = 0;
        while($aux < $_SESSION['indice'] ){
            if(isset($_SESSION['pos' . $aux])){
                echo "
                    <center>
                    <ul class='list-inline'>
                        <li class='list-inline-item d-inline-block col-lg-2'><img src='" . $_SESSION['pos' . $aux]['imagem'] . "'width='50px' height='50px'></li>
                        <li class='list-inline-item d-inline-block col-lg-2'>
                            <h5>". $_SESSION['pos' . $aux]['produto'] ."</h5>
                        </li>
                        <li class='list-inline-item d-inline-block col-lg-2'>
                            <h5>Quantidade: ". $_SESSION['pos' . $aux]['quantidade'] ."</h5>
                        </li>
                        <li class='list-inline-item d-inline-block col-lg-2'>
                            <h5>Subtotal: ". number_format($_SESSION['pos' . $aux]['subtotal'], 2, ',', '.')."</h5>
                        </li>
                    </ul> 
                    </center> 
                "; 
                $aux++;
            }
        }
        ?>
        <form action="concluir_venda.php" method="POST">
            <div class="form-row">
                <div class="form-group col-lg-9 mx-auto">
                    <input type="text" class="form-control form-control-lg" disabled value="<?php echo $_SESSION['rua']?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-4 ml-auto">
                    <input type="text" class="form-control form-control-lg" disabled value="<?php echo $_SESSION['bairro']?>">
                </div>
                <div class="form-group col-lg-4">
                    <input type="text" class="form-control form-control-lg" disabled value="<?php echo $_SESSION['cidade']?>">
                </div>
                <div class="form-group col-lg-1 mr-auto">
                    <input type="text" class="form-control form-control-lg" disabled value="<?php echo $_SESSION['estado']?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-3 ml-auto">
                    <input type="text" class="form-control form-control-lg" placeholder="Número" name="num">
                </div>
                <div class="form-group col-lg-6 mr-auto">
                    <input type="text" class="form-control form-control-lg" placeholder="Complemento" name="compl">
                </div>
            </div>
            <div>
            <?php
                if($_SESSION['entrega'] == 1){
                    echo    "<h3 class='text-center my-3'>Seu endereço esta disponivel para entrega</h3>
                            <div class='form-row'>
                                <div class='form-group col-lg-3 ml-auto'>
                                    <input type='text' class='form-control form-control-lg text-center' disabled value='Valor do frete: R$ ". number_format($_SESSION['frete'], 2, ',', '.') . "'>
                                </div>
                                <div class='form-group col-lg-3 mr-auto'>
                                    <input type='text' class='form-control form-control-lg text-center' disabled value='Valor total: R$ ". number_format($_SESSION['total'], 2, ',', '.') . "'>
                                </div>
                            </div>
                            <h3 class='text-center my-3'>Escolha a forma de pagamento</h3>
                            <div class='container col-lg-9'>
                                <ul class='nav nav-tabs'>
                                    <li class='nav-item'>
                                        <a class='nav-link active lead' data-toggle='tab' href='#home'>Dinheiro</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link lead' data-toggle='tab' href='#menu1'>Máquina de cartão</a>
                                    </li>
                                </ul>
                                <div class='tab-content'>
                                    <div id='home' class='container tab-pane active'><br>
                                        <div class='form-row'>
                                            <div class='form-group'>
                                                
                                                    <div class='custom-control custom-radio mt-1'>
                                                        <input type='radio' class='custom-control-input' id='troco' name='frmpag' required>
                                                        <label class='custom-control-label' for='troco'>Troco para: </label>  
                                                    </div> 
                                                
                                            </div>
                                            <div class='form-group'>
                                                <input type='text' class='form-control ml-lg-3 col-sm-6' name='troco'>
                                            </div>
                                        </div>
                                    </div>    
                                    <div id='menu1' class='container tab-pane fade'><br>
                                        <div class='form-row'>
                                            <div class='form-group'>
                                                <div>
                                                    <div class='custom-control custom-radio mt-1'>
                                                        <input type='radio' class='custom-control-input' id='cartao' name='frmpag' required>
                                                        <label class='custom-control-label' for='cartao'>Selecione o cartão: </label>  
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class='form-group'>
                                                <select class='form-control ml-lg-3' col-sm-6 id='sel1'>
                                                    <option>Visa Débito</option>
                                                    <option>Visa Crédito</option>
                                                    <option>Master Card</option>
                                                    <option>Alimentação</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                }
                else{
                    echo "<button class='btn btn-primary form-control btn-lg' type='submit'>não entregamos</button>";
                }
            ?>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-3 mx-auto mt-4">
                    <button class="btn btn-primary form-control btn-lg" type="submit">Finalizar Compra</button>
                </div>
                <div class="form-group col-lg-3 mx-auto mt-lg-4">
                    <a class="btn btn-primary form-control btn-lg" href='cardapio.php'>Voltar as Compras</a>
                </div>
            </div>
        </form>
    </div>

    <?php
        include 'rodape.html';
    ?>



    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script> 

</body>
</html>