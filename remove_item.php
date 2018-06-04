<?php
    session_start();

    $var = $_GET['rem'];
    unset($_SESSION['pos' . $var]);
    $_SESSION['indice'] -= 1;
    
    if($_SESSION['indice'] < 1){
        unset($_SESSION['indice']);
    }

    header('Location: carrinho.php');
    
?>