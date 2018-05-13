<?php
    session_start();
    include_once 'conexao.php';
    
    $cep = $_POST['CEP'];
    
    if($cep == "")
    {
        $_SESSION['erro'] = "Digite um cep para pesquisa";
        header ("Location: index.php#pesquisaCEP");
        die();
    }
    
    $sql = $conn->prepare( "SELECT cep as _CEP, rua as _RUA, bairro as _BAIRRO, CID.nome as _CID, EST.nome as _EST, entrega as _ENT 
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
        header ("Location: index.php#pesquisaCEP");
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
        $_SESSION['local'] = true;
        header("Location: index.php#pesquisaCEP");
    }

    $sql -> close();
    $conn -> close();

    /*echo($linha['_CEP'] . "<br>");
    echo($linha['_RUA'] . "<br>");
    echo($linha['_BAIRRO'] . "<br>");
    echo($linha['_CID'] . "<br>");
    echo($linha['_EST'] . "<br>");
    
    print_r($linha);*/

?>