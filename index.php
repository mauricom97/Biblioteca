<?php
session_start;
include "conexao.php";
    $_SESSION['usuario'] = "";
    header("Location: login.php");
?>