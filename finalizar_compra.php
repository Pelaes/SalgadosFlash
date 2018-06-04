<?php

session_start();
include 'conexao.php';

if(!isset($_SESSION['logado'])){
    $_SESSION['erro'] = "Faça login no site!";
    header("Location: login.php");
    die();
}

$cep = $_GET['var'];

if(empty($cep)){
    $_SESSION['erro'] = "CEP não informado";
    header("Location: carrinho.php");
    die(); 
}

$sql = $conn->prepare( "SELECT cep as _CEP, rua as _RUA, bairro as _BAIRRO, CID.nome as _CID, EST.sigla as _EST, entrega as _ENT 
                            FROM Enderecos ED 
                            INNER JOIN Cidades CID ON CID.cod = ED.fk_cidade 
                            INNER JOIN Estados EST ON EST.cod = ED.fk_estado 
                            WHERE cep = ?");
    $sql->bind_param("i", $cep);

    $sql->execute();

    $resultado = $sql->get_result();

    $linha = $resultado->fetch_assoc();

    if(empty($linha))
    {
        $_SESSION['erro'] = "Não achamos esse CEP! Verifique o número.";
        header ("Location: carrinho.php");
        die();
    }
    else
    {
        $_SESSION['cep'] = $linha['_CEP'];
        $_SESSION['rua'] = $linha['_RUA'];
        $_SESSION['bairro'] = $linha['_BAIRRO'];
        $_SESSION['cidade'] = $linha['_CID'];
        $_SESSION['estado'] = $linha['_EST'];
        $_SESSION['entrega'] = $linha['_ENT'];
        $_SESSION['frete'] = 7.50;
        header("Location: resumo_compra.php");
    }

    $sql -> close();
    $conn -> close();



?>