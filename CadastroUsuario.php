<?php
    session_start();
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['confirmar'];
    $ddd = $_POST['ddd'];
    $telefone = $_POST['telefone'];
    $termo_uso = $_POST['termo'];
    
    if (empty($nome))
    {
       $_SESSION['erro'] = "Preencha o campo nome!";
       header ("Location: login.php");
       die();
    }
    if ($email == "")
    {
       $_SESSION['erro'] = "Preencha o campo email!";
       header ("Location: login.php");
       die();
    }
    if ($senha == "")
    {
       $_SESSION['erro'] = "Preencha o campo senha!";
       header ("Location: login.php");
       die();
    }
    if ($conf_senha == "")
    {
       $_SESSION['erro'] = "Confirme sua senha!";
       header ("Location: login.php");
       die();
    }
    if ($ddd == "")
    {
       $_SESSION['erro'] = "Preencha o campo DDD!";
       header ("Location: login.php");
       die();
    }
    if ($telefone == "")
    {
       $_SESSION['erro'] = "Preencha o campo telefone!";
       header ("Location: login.php");
       die();
    }
    if ($termo_uso == "")
    {
       $_SESSION['erro'] = "Leia e aceite os termos de uso!";
       header ("Location: login.php");
       die();
    }
    if($senha != $conf_senha)
    {
        $_SESSION['erro'] = "As senhas não conferem!";
        header ("Location: login.php");
        die();
    }

    $sql = $conn->prepare("INSERT INTO CLientes(nome, email, senha, ddd, telefone) VALUES (?,?,?,?,?)");
    $sql->bind_param("sssss", $nome, $email, $senha, $ddd, $telefone);

    $sql->execute();
            
    $sql -> close();
    $conn -> close();

    $_SESSION['erro'] = "Cadastrado com sucesso!";
    header ("Location: login.php");
?>