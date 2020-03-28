<?php
session_start($usu);
include "conexao.php";
include "seguranca.php";

$usu = $_POST['fUsuario'];
$sen = $_POST['fSenha'];

$sql = "select * from usuarios where usuLogin='".$usu."' and usuSenha = '".$sen."'";

$resultado = mysqli_query($conexao, $sql);

$qtdLinhas = mysqli_num_rows($resultado);
echo $qtdLinhas;

    if($qtdLinhas == 1)
    {
        header("Location: lista.php");
    }
    else
    {
        header("Location: errologin.php");
    }
    
?>