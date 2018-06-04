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

    <div class="container">
        <?php
        if(!isset($_SESSION['indice'])){
        echo '<div class="jumbotron my-4">
                <h1 class="text-center">Ops! Carrinho de compras vazio!</h1>
                <h1 class="text-center">:(</h1>
                <img class="mx-auto d-block"src="imagens/cesta.png" alt="cesta de compras">
              </div>';
        }
        else{

            echo '<div class="jumbotron my-4">
                <h1 class="text-center mb-3">Carrinho de compras</h1>
                    <table id="itens_carrinho" class="table table-hover table-responsive-xl text-center">
                        <tbody>
                            <tr>
                                <th colspan="2">Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Subtotal</th>
                                <th>Remover</th>
                            </tr>';
            $aux = 0;
            while($aux < $_SESSION['indice'] ){
                if(isset($_SESSION['pos' . $aux])){
                
                echo "<tr>
                        <td class='align-middle'><img src='" . $_SESSION['pos' . $aux]['imagem'] . "'width='50px' height='50px'></td>
                        <td class='align-middle'> " . $_SESSION['pos' . $aux]['produto'] . "</td>
                        <td class='align-middle'>R$ " . number_format($_SESSION['pos' . $aux]['preco'], 2, ',','.') . "</td>
                        <td class='align-middle'><a href='atualiza_compra.php?rem=$aux'>
                            <img src='imagens/remove24.png' class='mr-2'></a>
                            " . $_SESSION['pos' . $aux]['quantidade'] . "
                            <a href='atualiza_compra.php?add=$aux'><img src='imagens/add24.png' class='ml-2'></a>
                        </td>
                        <td class='align-middle'>R$ " . number_format($_SESSION['pos' . $aux]['subtotal'], 2, ',', '.') . "</td>
                        <td class='align-middle'><a href='remove_item.php?rem=$aux' onclick='remove(this)'><img src='imagens/remover.png'></a></td>
                    </tr>";
                $aux++;
                }
            }
            echo    "<tr>
                        <th colspan='2'></th>
                        <th colspan='2'>Digite seu CEP</th>
                        <th>Total</th>
                        <th></th>
                    </tr>";
            $_SESSION['total'] = 0;
            $aux = 0;
            while($aux < $_SESSION['indice'] ){

                if(isset($_SESSION['pos' . $aux])){ 
                    $_SESSION['total'] += $_SESSION['pos' . $aux]['subtotal'];
                }
                $aux++;
            }
            echo    "<tr>
                        <td colspan='2'><a href='cardapio.php' class='btn btn-outline-primary btn-lg'>Continuar comprando</a></td>
                        <td colspan='2'>
                            <input type='text' id='cep' name='CEP' class='form-control form-control-lg text-center col-lg-6 mx-auto'>
                        </td>
                        <td class='align-middle'> R$ " . number_format($_SESSION['total'], 2, ',','.') ."</td>
                        <td><a href='#' onclick='PassarCep()' class='btn btn-outline-success btn-lg'>Finalizar compra</a></td>
                    </tr>";
            echo    '</tbody>
                    </table>
                    </div>
                    </div>';                     
        }
        ?>
        </div>
        <?php
            include 'rodape.html';
            include 'modal_campos_vazios.php';
        ?>
    

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script> 

    <script>
        function PassarCep(){
            var CEP = document.getElementById('cep').value;
            window.location.href = "finalizar_compra.php?var=" + CEP;
        }
    </script>

    <script>
        (function($) { 
            remove = function(item) { 
                var tr = $(item).closest('tr'); 
                tr.fadeOut(400, function() { 
                    tr.remove(); 
                });
            return false; 
            } 
        })(jQuery);
    </script>

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
    
</body>

</html>