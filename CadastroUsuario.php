<?php
    session_start();
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['confirmar'];
    $ddd = $_POST['ddd'];
    $telefone = $_POST['telefone'];
    //$termo_uso = $_POST['termo'];
    
    
    if (empty($nome))
    {
        echo "ErroNome";     
        die();
    }
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
    if (empty($conf_senha))
    {
        echo "ErroConf";
        die();
    }
    if (empty($ddd))
    {
        echo "ErroDDD";
        die();
    }
    if (empty($telefone))
    {
        echo "ErroTel";
        die();
    }
    if(!isset($_POST['termo'])){
        echo "ErroTermo";
        die();
    }
    if($senha != $conf_senha)
    {
        echo "ErroConfere";
        die();
    }

    $sql = $conn->prepare("INSERT INTO CLientes(nome, email, senha, ddd, telefone) VALUES (?,?,?,?,?)");
    $sql->bind_param("sssss", $nome, $email, $senha, $ddd, $telefone);

    $sql->execute();
            
    $sql -> close();
    $conn -> close();

    echo "Sucesso";
    die();
?>