<?php

include ("conexao.php");

$codigoURL  = $_GET["inputCodigo"];

//include "seguranca.php";


$result_livros = "DELETE FROM `biblioteca`.`livros` WHERE (`livCodigo` = '$codigoURL');";

$resultado_livros = mysqli_query($conn, $result_livros);

header("Location: lista.php");
