<?php
    
    $pegaCodigo = $_GET['cod'];
    $pegaAcao = $_GET['acao'];
    $verificacao = 0;
   
    
        include "conexao.php";
        //include "seguranca.php";
    
        $sql = "select * from livros where livCodigo = $pegaCodigo";
        $resultado = mysqli_query($conexao, $sql);
    
        $listaLivros = array();
        while ($livros = mysqli_fetch_assoc($resultado))
        {
            $listaLivros[] = $livros;
        }
    
        function alterarLivro(){
            echo "ola";
        }

    ?>

    <?php foreach ($listaLivros as $livro ) :?>
    
    <?php endforeach; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modelo de exercicio</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body onload="verifica();">
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="http://localhost/biblioteca/lista.php">
    <img src="https://cdn.pixabay.com/photo/2016/10/06/19/02/book-1719737_960_720.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Biblioteca
  </a>
</nav>
    <header>
        <center><h1 id="titulo">#Informação</h1></center>
    </header>

    <section>

        <div id="infos" name="infos">
            
        </div>
        
        <?php if($pegaAcao == 'i' ){ 
                echo "<form method='POST' action='processa.php'>";
            }else if($pegaAcao == 'a'){
                echo "<form method='GET' action='altera.php'>";
            }else if($pegaAcao == 'e'){
                echo "<form method='GET' action='exclui.php'>";
            }
        
        ?>


            
            <input name="inputCodigo" id="inputCodigo" value="<?php echo $pegaCodigo ?>" type="number" placeholder="Codigo" max="9999999" min="0"><br><br>
            
            <label id="nomeTitulo">Titulo do livro:</label><br>
            <input type="text" value="<?php echo $livro['livTitulo']; ?>" id="titulo1" name="titulo1" placeholder="Titulo | Ex: Narnia"><br><br>
            
            <label id="nomeAutor">Autor:</label><br>
            <input type="text" value="<?php echo $livro['livAutor'];  ?>" id="autor" name="autor" placeholder="Autor | EX: Clive Staples"><br><br>
            
            <label id="nomePaginas">Paginas:</label><br>
            <input type="number" placeholder="Paginas | EX: 752" id="numPaginas" min="1" value="<?php echo $livro['livPaginas']; ?>" name="paginas"><br><br>
                <p id="alerta"></p>
            <center><div id="opcao"></div></center>
            </form>
          

             
    </section>
    <footer>
        
    </footer>

</body>
</html>