<?php
    include "conexao.php";
    //include "seguranca.php";

    $sql = "select * from livros";
    $resultado = mysqli_query($conexao, $sql);

    $listaLivros = array();
    while ($livros = mysqli_fetch_assoc($resultado))
    {
        $listaLivros[] = $livros;
    }

?>


<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title id="bibliotecaParticular">Biblioteca Particular!</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <audio id="tutorial" src="audios\tutorial.mp3"></audio>
        <audio id="infoTutorial" src="audios\infoTutorial.mp3"></audio>
    </head>

    <body>
    <div class="container">
    <img src="img\volume.png" id="explicacao" alt="Explicando a pagina" onmouseover="infoTutorial();" onclick="tutorial();">

        <h1 id="bibliotecaP">Biblioteca Particular</h1>
        
        
        <a type="button" class="btn btn-success" href="formLivro.php?acao=i&cod=null">Incluir livro</a><br><br>
        

        
        <div id="tabela">
        <table class="table table-sm table-dark" border=1>
            
            <tr id="teste1">
                <td>Codigo</td>
                <td>Titulo</td>
                <td>Autor</td>
                <td colspan=2>Opcoes</td>
                
            </tr>
    <?php foreach ($listaLivros as $livro ) :?>
    <tr>
        <td> <?php echo $livro['livCodigo']; ?> </td>
        <td> <?php echo $livro['livTitulo']; ?> </td>
        <td> <?php echo $livro['livAutor']; ?> </td>
        <td> <center><a type="button" class="btn btn-warning" onclick="funcaoAlterar();"  href="formLivro.php?acao=a&cod=<?php echo $livro['livCodigo']; ?>">Alterar</a></center> </td>
        <td> <center><a type="button" class="btn btn-danger" onclick="funcaoExcluir();"  href="formLivro.php?acao=e&cod=<?php echo $livro['livCodigo']; ?>">Excluir</a></center></td>
    </tr>
    <?php endforeach; ?>

     </table>
     </div>
     </div>
    </body>
    <script src="script.js"></script>
</html>