<?php
    session_start();
    include_once 'conexao.php';
    $email = $_POST['user'];
    $senha = $_POST['pass'];

    if (empty($email))
    {
        echo "ErroEmail";
        die();
    }

    if (empty($senha))
    {
        echo "ErroSenha";
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
        echo "FalhaLogin";
        die();
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
        echo "Sucesso";
    }
?>