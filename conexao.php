<?php
    header('Content-Type: text/html; charset=utf-8');
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = '';
    $banco = 'Salgados_Flash';

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);
    $sql= "SET NAMES 'utf8'";
    mysqli_query($conn, $sql);
    $sql = 'SET character_set_connection=utf8';
    mysqli_query($conn, $sql);
    $sql = 'SET character_set_client=utf8';
    mysqli_query($conn, $sql);
    $sql = 'SET character_set_results=utf8';
    mysqli_query($conn, $sql);
    
    if(mysqli_connect_error($conn))
    {
        echo ("Erro na conexão: " .mysqli_connect_error());
        die();
    }   
?>