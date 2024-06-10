<?php
include_once('conexao/conexao.php');

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login - Cepe</title>
  

    <!-- Bootstrap core CSS -->
<link href="testes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>

  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="validações/validalogin.php">
  <!-- imagem do cetam caso tiver
    <img class="mb-4" src="img/cetam_2023.svg" alt="" width="250" height="100">-->
    <h1 class="h3 mb-3 fw-normal">Área de Login</h1>

    <div class="form-floating">
      <input type="text" name="usuario" class="form-control" id="usuario" placeholder="usuario">
      <label for="usuario">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="senha" id="senha" placeholder="senha">
      <label for="senha">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Acessar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
    
  </form>
</main>


    
  </body>
</html>