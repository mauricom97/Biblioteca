<?php
	//include "seguranca.php";
	include "conexao.php";
    $sql = "select * from generos";
    $resultado = mysqli_query($conexao, $sql);

    $qtdLinhas = mysqli_num_rows($resultado);
    

    $listaGeneros = array();
    while ($generos = mysqli_fetch_assoc($resultado))
    {
        $listaGeneros[] = $generos;
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
        <head>
        <style>
        #corpo{
            background-color: black;
        }
        </style>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <body id="corpo">
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="">
    <img src="https://cdn.pixabay.com/photo/2016/10/06/19/02/book-1719737_960_720.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Biblioteca
  </a>
    <a href="principal.php">Pagina Inicial</a> 
</nav>
<br>
<br>
<br>
<a type="button" href="formGenero.php?acao=i"><button class="btn btn-success">Cadastrar Genero</button></a>
<br>
<br>

<div id="tabela">
        <table class="table table-sm table-dark" border=1>
        
            <tr id="teste1">
                <td>Código</td>
                <td>Genero</td>
                <td colspan=2>Opções</td>
                
                
                
            </tr>
            
    
    <?php foreach ($listaGeneros as $generos ) :?>
    <tr>
        <td><center><?php echo $generos['genCodigo']; ?><img src="img/livro1.png" width="30" height="30" alt=""></center></td>
        <td><center><?php echo $generos['genNome']; ?></center></td>
        <td> <center><a type="button" class="btn btn-warning" onclick="funcaoAlterar();"  href="formGenero.php?acao=a&cod=<?php echo $generos['genCodigo']; ?>">Alterar</a></center> </td>
        <td> <center><a type="button" class="btn btn-danger" onclick="funcaoExcluir();"  href="formGenero.php?acao=e&cod=<?php echo $generos['genCodigo']; ?>">Excluir</a></center></td>
        
    </tr>
    <?php endforeach; ?>

        </body>
    </head>
</html>
