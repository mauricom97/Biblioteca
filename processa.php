<?php

include_once ("conexao.php");


$titulo   = filter_input(INPUT_POST, 'titulo1', FILTER_SANITIZE_STRING);
$autor    = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
$paginas  = filter_input(INPUT_POST, 'paginas', FILTER_SANITIZE_NUMBER_INT);

if($titulo == '' || $autor == '' || $paginas == ''){
    header("Location: http://localhost/biblioteca/formLivro.php?acao=i&cod=null");
}else{

$result_livros = "INSERT INTO livros (livTitulo, livAutor, livPaginas) VALUES ('$titulo', '$autor', '$paginas')";

$resultado_livros = mysqli_query($conn, $result_livros);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "Livro cadastrado com sucesso";
    header("Location: lista.php");
}else{
    
    }
}

