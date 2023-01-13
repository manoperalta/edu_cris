<?php
include('protect.php');
include('conexao.php');

?>
<?php


$pesquisa = $mysqli->real_escape_string($_GET['busca']);
$sql_code = "SELECT * 
FROM usuarios 
WHERE nome LIKE '%$pesquisa%' 
OR email LIKE '%$pesquisa%' 
OR agenda LIKE '%$pesquisa%'";

$sql_query = $mysqli->query($sql_code) or die("Error ao consultar" . $mysqli->error);
?>

<!doctype html>
<html lang="pt-br">

<head>
  <title>Painel de Acesso ::: Buscar</title>
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
    <h7 class="text-center m-auto" style="color: aquamarine;">Bem vindo ao Painel, <?php echo $_SESSION['nome'];?>
</h7>
  </div>
</nav>


  <main>
    <div class="container bg-opacity-10 bg-dark">
<form action="">
  <label>Você pode buscar pelo Nome ou pela Agenda!</label><br>
    <input name="busca" placeholder="Digite o Dado" type="text">
    <button class="btn btn-primary" type="submit" role="button">Pesquisar</button>
    <a class="btn btn-primary" href="editar.php" role="button">Editar</a><br>
</form>
<table class="table" border="1">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Contato</th>
      <th scope="col">Agenda</th>
      <th scope="col">Acesso</th>
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
  $nome_link = $dados['nome'];
  ?>
  <tr>
    <td><?php echo $dados['id']; ?></td>
    <td><?php echo $nome_link; ?></td>
    <td><?php echo $dados['email']; ?></td>
    <td><?php echo $dados['agenda']; ?></td>
    <td>
    <form action="aula.php">
<input name="busca" placeholder="" type="hidden" value="<?php echo $dados['nome']; ?>">
        <button class="btn btn-primary" type="submit" role="button">...</button>

</form>
    </td>
    


  </tr>
  <?php


}
} ?>
<?php
}
  ?>
</tbody>
</table>
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