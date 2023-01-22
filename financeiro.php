<?php
include ('protect.php');
include('conexao.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Painel de Acesso</title>
  <!-- Required meta tags -->
 <?php include('meta.php'); ?>
 
</head>

<body>
  <header>
 <?php include('nav.php'); ?>
 
  </header>
  <main>
    <div class="container">
   
    <div class="container">
    <p class="text-center m-auto" style="color: black;">Dashboard ::: Editar</p>
<label>Para realizar a edição de um dado, faça a busca primeiro!</label><br>
<?php


$pesquisa = $mysqli->real_escape_string($_GET['busca']);
$sql_code = "SELECT * 
FROM usuarios 
WHERE nome LIKE '%$pesquisa%' 
OR email LIKE '%$pesquisa%' 
OR agenda LIKE '%$pesquisa%' 
OR financeiro_aberto LIKE '%$pesquisa%' 
OR financeiro_pago LIKE '%$pesquisa%'";

$sql_query = $mysqli->query($sql_code) or die("Error ao consultar" . $mysqli->error);
?>

<form action="">
  <label>Você pode buscar pelo Nome ou pela situação!</label><br>
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
      <th scope="col">Agenda</th>
      <th scope="col">Financeiro Aberto</th>
      <th scope="col">Dívida Ativa</th>
      <th scope="col">Data de Pagamento</th>
      <th scope="col">Ações</th>
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
OR financeiro_aberto LIKE '%$pesquisa%' 
OR financeiro_pago LIKE '%$pesquisa%' 
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
    <td><?php echo $dados['agenda']; ?></td>
<td><label>R$: <?php echo $dados['divida_ativa']; ?></label></td>
    </div>
  
  
  </td>
    <td><?php echo $dados['financeiro_aberto']; ?></td>
    <td><?php echo $dados['financeiro_pago'] . "R$: " . $dados['divida_paga'] . ",00"; ?></td>
    <td>
    <div class="container">
  <div class="row">
  <div class="col-6 col-sm-4">
    <form action="aula.php">
<input name="busca" placeholder="" type="hidden" value="<?php echo $dados['nome']; ?>">
        
<button class="btn btn-primary" type="submit" role="button">R</button>

</form></div>
<div class="col-6 col-sm-4">
<form action="editar.php">
<input name="busca" placeholder="" type="hidden" value="<?php echo $dados['nome']; ?>">
        <button class="btn btn-primary" type="submit" role="button">E</button>

</form></div>
<div class="col-6 col-sm-4">
<form action="pagar.php" method="POST">
<input name="id" placeholder="" type="hidden" value="<?php echo $dados['id']; ?>">
<input name="nome" placeholder="" type="hidden" value="<?php echo $dados['nome']; ?>">
<input name="financeiro_pago" placeholder="" type="hidden" value="<?php echo $dados['financeiro_pago']; ?>">
<input name="divida_paga" placeholder="" type="hidden" value="<?php echo $dados['divida_paga']; ?>">
<input name="divida_ativa" placeholder="" type="hidden" value="<?php echo $dados['divida_ativa']; ?>">
<label>R$: <input name="pagar" placeholder="" type="text" size="3" value="<?php echo $dados['divida_ativa']; ?>">
<button type="submit" role="button" class="btn btn-primary btn-sm">Pagar</button>
    </form></div>

</div></div>


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
</div></div>
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

    