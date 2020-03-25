<?php
    $servidor   = "localhost";
    $dbUsuario  = "root";
    $dbSenha    = "";
    $dbBanco    = "biblioteca";


    $conn = mysqli_connect($servidor, $dbUsuario, $dbSenha, $dbBanco);
    $conexao = mysqli_connect($servidor, $dbUsuario, $dbSenha, $dbBanco);

    if(mysqli_connect_errno($conexao))
    {
        echo "<h1>Problema ao conectar com o banco! Verifique.</h1>";
        die();
    }
?>