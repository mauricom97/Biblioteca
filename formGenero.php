<?php
include "conexao.php";

$pegaAcao = $_GET['acao'];
if($pegaAcao != 'i'){
        $pegaCodigo = $_GET['cod'];
        
                $sql = "SELECT * FROM generos WHERE genCodigo = $pegaCodigo";
                $resultado = mysqli_query($conexao, $sql);

                $qtdLinhas = mysqli_num_rows($resultado);


                $listaGeneros = array();
                while ($generos = mysqli_fetch_assoc($resultado))
                {
                    $listaGeneros[] = $generos;
                }

}



?>
    <?php foreach ($listaGeneros as $generos ) :?>

        <?php endforeach; ?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php if($pegaAcao == 'i'){ 
      
    echo '
    <center><h1>Inserir generos</h1>

    <form action="processa.php" method="GET"> 
    

</form>'; 
  }
  else if($pegaAcao == 'a'){ 
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<center><form action="processa.php" method="GET">';
    echo '<input id="genero" placeholder="Genero"> <input type="submit" value="Alterar"</center>';
  }


  else if($pegaAcao == 'e'){
    echo '
    
    <center><h1>Excluir generos</h1>

    <form action="processa.php" method="GET"> 
  
      <label>Genero</label>
      <input type="text" name="genero" placeholder="Insira o genero">
      <button type="submit" class="btn btn-danger">Excluir</button>
    </div>

    
    </center>

</form>'; 
  }
?>

  </body>
</html>