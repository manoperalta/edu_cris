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
            echo "Falha ao Logar! E-amil ou senha incorretos";
        }
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>PV ::: Cadastros</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
  <div class="dropdown m-auto">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Geral
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li><a class="dropdown-item" href="painel.php">Painel</a></li>    
  <li><a class="dropdown-item" href="#">Professores</a></li>
    <li><a class="dropdown-item" href="#">Financeiro</a></li>
    <li><a class="dropdown-item" href="logout.php">SAIR</a></li>
  </ul>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Alunos
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li><a class="dropdown-item" href="cadastrar.php">Cadastrar</a></li>  
  <li><a class="dropdown-item" href="agenda.php">Agendar</a></li>
    <li><a class="dropdown-item" href="editar.php">Editar</a></li>
    <li><a class="dropdown-item" href="busca.php">Buscar</a></li>
  </ul>
</div>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h7 class="text-center m-auto" style="color: aquamarine;">Sistema de Cadastro</h7>
</h7>
  </div>
</nav>
    <form action="" method="post">
<label>E-mail:</label>
<input type="text" name="email">
</p><p>
    <label>Senha</label>
    <input type="password" name="senha">
</p><p>
    <button type="submit">Entrar</button>
    </p>
</form>
</body>
</html>