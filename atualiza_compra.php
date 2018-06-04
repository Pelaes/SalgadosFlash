<?php
    session_start();

    if(isset($_GET['add'])){
        $var = $_GET['add'];
        $_SESSION['pos' . $var]['quantidade'] += 1;
        $_SESSION['pos' . $var]['subtotal'] = $_SESSION['pos' . $var]['preco'] * $_SESSION['pos' . $var]['quantidade'];
        header("Location: carrinho.php");
    }

    if(isset($_GET['rem'])){
        $var = $_GET['rem'];
        if($_SESSION['pos' . $var]['quantidade'] <= 1){
            header("Location: carrinho.php");
            die();
        }
        $_SESSION['pos' . $var]['quantidade'] -= 1;
        $_SESSION['pos' . $var]['subtotal'] = $_SESSION['pos' . $var]['preco'] * $_SESSION['pos' . $var]['quantidade'];
        header("Location: carrinho.php");
    }
    
?>