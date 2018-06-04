<?php
    session_start();
    
    if(!isset($_SESSION['indice'])){
        $_SESSION['indice'] = 0;
    }    
    $pos = $_SESSION['indice'];

    $_SESSION['pos' . $pos]['imagem'] = "imagens/individual.webp";
    $_SESSION['pos' . $pos]['produto'] = "Individual";
    $_SESSION['pos' . $pos]['quantidade'] = 1;
    $_SESSION['pos' . $pos]['preco'] = 12.90;
    $_SESSION['pos' . $pos]['entrega'] = 5.00;
    $_SESSION['pos' . $pos]['subtotal'] = $_SESSION['pos' . $pos]['preco'] * $_SESSION['pos' . $pos]['quantidade'];
    //$_SESSION['pos' . $pos]['total'] = 0;    
    $_SESSION['indice'] +=1;
    header("Location: carrinho.php");
?>