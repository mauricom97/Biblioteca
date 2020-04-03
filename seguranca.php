<?php
session_start($usu);
if($_SESSION['usuario'] == '')
{
    header("Location: safadinho.php");
}else{
    header("Location: lista.php");
}
?>