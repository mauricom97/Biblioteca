<?php
session_start();
include "conexao.php";

$usu = $_POST['fUsuario'];
$sen = $_POST['fSenha'];

$sql = "SELECT * FROM usuarios WHERE usuLogin ='".$usu."' AND usuSenha = '".$sen."'";

$resultado = mysqli_query($conexao, $sql);

$qtdLinhas = mysqli_num_rows($resultado);




    if($qtdLinhas == 1)
    {
        header("Location: lista.php");
    }
    else
    {
        header("Location: errologin.php");
    }

    

?>
