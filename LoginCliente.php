<?php
    session_start();
    include_once 'conexao.php';
    $email = $_POST['user'];
    $senha = $_POST['pass'];

    if (empty($email))
    {
       $_SESSION['erro'] = "Preencha o campo email!";
       header ("Location: login.php");
       die();
    }

    if (empty($senha))
    {
       $_SESSION['erro'] = "Preencha o campo senha!";
       header ("Location: login.php");
       die();
    }

    $sql = $conn->prepare("SELECT * FROM clientes WHERE email = ? AND senha = ? LIMIT 1");
    $sql->bind_param("ss",$email, $senha);

    $sql->execute();

    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();

    $sql -> close();
    $conn -> close();

    if(empty($linha)){
        $_SESSION['erro'] = "Usuário ou senha inválidos!";
        header ("Location: login.php");
    }
    else{
        $nome = explode(" ", $linha['nome']);
        $_SESSION['logado'] = $nome[0];
        $_SESSION['cod'] = $linha['cod'];
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['email'] = $linha['email'];
        $_SESSION['ddd'] = $linha['ddd'];
        $_SESSION['telefone'] = $linha['telefone'];
        $_SESSION['erro'] = "Bem vindo " . $nome[0];
        header ("Location: login.php");
    }
?>