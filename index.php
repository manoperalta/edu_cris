<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0 ) {
        echo "Preencha o E-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua Senha";

    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execuçã do codigo SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['tipo'] = $usuario['tipo'];
            $_SESSION['agenda'] = $usuario['agenda'];
            $_SESSION['senha'] = $usuario['senha'];
            

            header("location: painel.php");

        } else {
            echo "Falha ao Logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Edu Cris Sistema</title>
  <link rel="icon" type="image/x-icon" href="img/logo.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
 <?php include('nav.php'); ?>
   
  
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
    </style>

  </head>
  <body class="text-center">
  <main class="form-signin">
  <div class="container" style="padding: 45px;">
    <div class="row">
    <div class="col">
     
    </div>
    <div class="col">
    <form action="" method="post">
    <img class="mb-4" src="img/logo.png" alt="Espaco da Prof Cris" width="257" height="87">
    <h1 class="h3 mb-3 fw-normal">Área de Acesso:</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div><p></p>

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>

    </div>
    <div class="col">
      
    </div>
    </main>
</body>
</html>