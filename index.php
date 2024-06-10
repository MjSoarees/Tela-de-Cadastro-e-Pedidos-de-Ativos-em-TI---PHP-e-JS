<?php
include_once('conexao/conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="./assets/school-book.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,400;0,700;0,800;1,400;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Escola</title>
</head>

<body>
    <div class="cover-logo">
        <img src="assets/escola-frutos.png">
    </div>
    <div class="login-box">
        <h1>Sistema escolar</h1>
        <p class="acessar-sistema">Acessar sistema</p>
        <div class="radio-inputs">
           
            
        </div>
        <form method="post" action="validações/validalogin.php">
            <input type="text" id="inputEmail" name="usuario" placeholder="Login"><br>
            <input type="password" id="inputSenha" name="senha" placeholder="Senha">
            <button id="btn-entrar" type="submit">ENTRAR</button>
        </form>
       
        <p>Aprender com tecnologia</p>
    </div>


</body>

</html>