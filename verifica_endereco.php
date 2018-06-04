<?php
    session_start();

    $num = $_POST['num'];

    if(empty($num))
    {
        $_SESSION['erro'] = "Digite o numero do local de entrega!";
        header ("Location: index.php#pesquisaCEP");
        die();
    }

    $_SESSION['numero'] = $num;

    if($_SESSION['entrega'] == 1)
    {
        $_SESSION['disponivel'] = true;
        header ("Location: index.php#pesquisaCEP");
        die();
    }
    if($_SESSION['entrega'] == 0)
    {
        $_SESSION['indisponivel'] = true;
        header ("Location: index.php#pesquisaCEP");
        die();
    }
?>