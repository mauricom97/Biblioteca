<?php
    //session_start;
    include "conexao.php";
    //include "seguranca.php";

    

    $sql = "select * from livros";
    $resultado = mysqli_query($conexao, $sql);

    $qtdLinhas = mysqli_num_rows($resultado);
    

    $listaLivros = array();
    while ($livros = mysqli_fetch_assoc($resultado))
    {
        $listaLivros[] = $livros;
    }

?>


<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title id="bibliotecaParticular">Biblioteca Particular</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <audio id="tutorial" src="audios\tutorial.mp3"></audio>
        <audio id="infoTutorial" src="audios\infoTutorial.mp3"></audio>
    </head>

    <body onLoad="listarTodos();">
        <!-- Image and text -->
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="">
    <img src="https://cdn.pixabay.com/photo/2016/10/06/19/02/book-1719737_960_720.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Biblioteca
  </a>

  <form method='GET' action='buscar.php'>
        
        <input type="number" id="teste" name="buscaLivro" min="1" max="99999999" placeholder="Cod. livro"> <button type="submit" class="btn btn-outline-info">Buscar</button> 

    </form>
</nav>
    
    
    
    <div class="container">
    <img src="img\volume.png" id="explicacao" alt="Explicando a pagina" onmouseover="infoTutorial();" onclick="tutorial();">


    <div id="bibliotecaP"> 
        <img src='img/lendo.gif' height="200px" width="200px"></img>
        </div>
        
        <div id="botaoIncluir">
        <a type="button" class="btn btn-success" href="formLivro.php?acao=i&cod=null">Incluir livro</a><br><br>
        </div>

        
        <div id="tabela">
        <table class="table table-sm table-dark" border=1>
            
            <tr id="teste1">
                <td>Código</td>
                <td>Status</td>
                <td>Título</td>
                <td>Autor</td>
      <td colspan=2>Opções</td>
                
                
                
            </tr>
    
    
    <?php foreach ($listaLivros as $livro ) :?>
    <tr>
        <td><center><?php echo $livro['livCodigo']; ?><img src="img/livro1.png" width="30" height="30" alt=""></center></td>
        <td><center><?php echo $livro['livStatus']; ?></center></td>
        <td> <?php echo $livro['livTitulo']; ?> </td>
        <td> <?php echo $livro['livAutor']; ?> </td>
        <td> <center><a type="button" class="btn btn-warning" onclick="funcaoAlterar();"  href="formLivro.php?acao=a&cod=<?php echo $livro['livCodigo']; ?>">Alterar</a></center> </td>
        <td> <center><a type="button" class="btn btn-danger" onclick="funcaoExcluir();"  href="formLivro.php?acao=e&cod=<?php echo $livro['livCodigo']; ?>">Excluir</a></center></td>
        
    </tr>
    <?php endforeach; 
    
?>

     </table>
     </div>
     </div>  
    </body>
    <script src="script.js"></script>
</html>