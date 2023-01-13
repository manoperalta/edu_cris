  
 <?php
include('protect.php');
include('conexao.php');

?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Painel de Acesso</title>
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
  <div class="bg-dark p-4">Financeiro
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
    <h7 class="text-center m-auto" style="color: aquamarine;">Bem vindo ao Painel, <?php echo $_SESSION['nome'];?>
</h7>
  </div>
</nav>
  </header>
  <main>
  <div class="container">
    <p class="text-center m-auto" style="color: black;">Dashboard ::: Editar</p>
<label>Para realizar a edição de um dado, faça a busca primeiro!</label><br>
<?php


$pesquisa = $mysqli->real_escape_string($_GET['busca']);
$sql_code = "SELECT * 
FROM usuarios 
WHERE nome LIKE '%$pesquisa%' 
OR email LIKE '%$pesquisa%' 
OR agenda LIKE '%$pesquisa%'";

$sql_query = $mysqli->query($sql_code) or die("Error ao consultar" . $mysqli->error);
?>



<form action="">
  <label>Procurar:</label>
    <input name="busca" placeholder="Digite o Dado" type="text">
    <button class="btn btn-primary" type="submit" role="button">Pesquisar</button>
</form>
<div class="container bg-opacity-10 bg-dark">
<table class="table" border="1">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Contato</th>
      <th scope="col">Agenda</th>
    </tr>
  </thead>
  <tbody>
  <?php
  if (!isset($_GET['busca'])) {
    ?>
  <tr>
      <th scope="row">#</th>
      <td colspan="3">Digite para pesquisar</td>
      
    </tr>
    <?php  
} else {
  $pesquisa = $mysqli->real_escape_string($_GET['busca']);
$sql_code = "SELECT * 
FROM usuarios 
WHERE nome LIKE '%$pesquisa%' 
OR tipo LIKE '%$pesquisa%' 
OR agenda LIKE '%$pesquisa%'";

$sql_query = $mysqli->query($sql_code) or die("Error ao consultar" . $mysqli->error);

if ($sql_query->num_rows == 0) {
  ?>
  <tr>
  <th scope="row">1</th>
  <td colspan="3">Resultados NÃO encontrados...</td>
</tr>
<?php
} else {
while($dados = $sql_query->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $dados['id']; ?></td>
    <td><?php echo $dados['nome']; ?></td>
    <td><?php echo $dados['email']; ?></td>
    <td><?php echo $dados['agenda']; ?></td>
    <p class="text-center m-auto" style="color: black;">Dados Cadastrais Editor <?php echo $dados['nome']; ?></p>
          
        <form action="processar_nome.php" method="POST">
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
           <p class="lead fw-normal mb-1 me-3">
          <p class="h4">Editar:</p></p></div>
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">
          <input type="hidden" name="id" placeholder="" value="<?php echo $dados['id']; ?>">
          <label>Nome:</label>
          <input type="text" name="nome" placeholder="" value="<?php echo $dados['nome']; ?>">
            <button class="btn btn-primary" type="submit">Alterar</button>
        </p></div>
    </form>

    <form action="processar_email.php" method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">
          <input type="hidden" name="id" placeholder="" value="<?php echo $dados['id']; ?>">
          <input type="hidden" name="nome" placeholder="" value="<?php echo $dados['nome']; ?>">
          <label>E-mail:</label>
          <input type="text" name="email" placeholder="" value="<?php echo $dados['email']; ?>">
            <button class="btn btn-primary" type="submit">Alterar</button>
        </p></div>
    </form>

    <form action="processar_agenda.php" method="POST">
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
           <p class="lead fw-normal mb-1 me-3">
           <p class="text-center m-auto">Agendamento:</p><br></br>
            <input type="hidden" name="id" placeholder="" value="<?php echo $dados['id']; ?>">
          <input type="hidden" name="nome" placeholder="" value="<?php echo $dados['nome']; ?>"></div>
         
          
        <div class="container">
        <div class="row">
    <div class="col-6 col-sm-3">
          <label>Agenda 1x:
          <select name="agenda" id="agenda">
          <option value=""></option>  
          <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select></div>
          <div class="col-6 col-sm-3">
            <label>Horário 1x</label>
            <input type="text" name="horario1x" size="5">
                    </p></p></div>
                    <div class="col-6 col-sm-3">
          <label>Agenda 2x:
          <select name="agenda2x" id="agenda2x">
          <option value=""></option>  
          <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select></div>
          <div class="col-6 col-sm-3">
                        <label>Horário 2x</label>
            <input type="text" name="horario2x" size="5">
        </p></p></div>
</div>
<div class="row">
<div class="col-6 col-sm-3">
          <label>Agenda 3x:
          <select name="agenda3x" id="agenda3x">
          <option value=""></option>  
          <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select></div>
          <div class="col-6 col-sm-3">

            <label>Horário 3x</label>
            <input type="text" name="horario3x" size="5">
                    </p></p></div>
                    <div class="col-6 col-sm-3">

          <label>Agenda 4x:
          <select name="agenda4x" id="agenda4x">
          <option value=""></option>
            <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select></div>
          <div class="col-6 col-sm-3">

                        <label>Horário 4x</label>
            <input type="text" name="horario4x" size="5">
        </p></p></div>
</label>
        </p>
        </p></div>
                  <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                      <button class="btn btn-primary" type="submit">Alterar</button>
        </p></div><hr></hr>
          </form>

  </tr>
  <?php


}
} ?>
<?php
}
  ?>
</tbody>
</table></div>
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>