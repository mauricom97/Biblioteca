<?php

include ("conexao.php");

$codigoURL  = $_GET["inputCodigo"];
$titulo     = $_GET["titulo1"];
$autor      = $_GET["autor"];
$paginas    = $_GET["paginas"];

//include "seguranca.php";


$result_livros = "UPDATE livros SET livTitulo = '$titulo', livAutor = '$autor', livPaginas = '$paginas' where livCodigo = '$codigoURL'";

$resultado_livros = mysqli_query($conn, $result_livros);

header("Location: lista.php");