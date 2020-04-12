<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modelo de exercicio</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <section id="login">
        <center><img src="img/user.png" width="100px" height="100px"></center>
        <div>
            <center><h1 id="titulo">Login usuario</h1></center>
        </div>
            <form action="entrar.php" method="POST">
            <table>
                <tr>
                <td><label id="user" for="fUsuario">Usuario:</label></td>
                <td><input type="email" placeholder="email@domain.com" id="fUsuario" name="fUsuario"></td>
            </tr>
            <tr>
                <td><label id="pass" for="fSenha">Senha:</label></td>
                <td><input type="password" placeholder="Password" id="fSenha" name="fSenha"></td>
            </tr>
            <br>
            <tr>

            </tr>

                
        </table>
        <br>
        <button type="submit" class="btn btn-primary">Entrar</button>
        <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>
        <div>


        </div>
    </section>
</center>
    <footer>
        
    </footer>
<script src="script.js"></script>
</body>
</html>