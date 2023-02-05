  
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
    <link rel="icon" type="image/x-icon" href="img/logo.png">
<?php include('nav.php'); ?>

  </header>
<body>


<main>
    <div class="container">
    <p class="text-center m-auto" style="color: black;">Dashboard ::: Registro de Aula</p>

    <div class="bg-dark text-bg-success">
  <!-- Colocar a cor -->
  <div class="container text-center m-auto" style="padding: 10px;">
  <label>Para realizar o Registro, procure o aluno:</label><br>
<?php


$pesquisa = $mysqli->real_escape_string($_GET['busca']);
$sql_code = "SELECT * 
FROM usuarios 
WHERE nome LIKE '%$pesquisa%' 
OR email LIKE '%$pesquisa%' 
OR agenda LIKE '%$pesquisa%' 
OR aulas LIKE '%$pesquisa%' ";

$sql_query = $mysqli->query($sql_code) or die("Error ao consultar" . $mysqli->error);
?>

<form action="">
  <label>Procurar:</label>
    <input name="busca" placeholder="Digite o Dado" type="text">
    <button class="btn btn-primary" type="submit" role="button">Pesquisar</button>
</form></div></div> 
<div class="container">
<table class="table" border="1">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Contato</th>
      <th scope="col">Agenda</th>
      <th scope="col">Aulas</th>
    
      
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
OR agenda LIKE '%$pesquisa%'
OR aulas LIKE '%$pesquisa%' 
OR financeiro_aberto LIKE '%$pesquisa%' 
OR financeiro_pago LIKE '%$pesquisa%' 
OR valor_aula LIKE '%$pesquisa%' 
OR divida_ativa LIKE '%$pesquisa%' 
OR divida_paga LIKE '%$pesquisa%'";

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
    <td><?php echo $dados['aulas']; ?></td>
        
    
</div>
    <p class="text-center m-auto" style="color: black;">Nome do Aluno: <?php echo $dados['nome']; ?></p>
          
        <form action="processar_nome.php" method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">
          <input type="hidden" name="id" placeholder="" value="<?php echo $dados['id']; ?>">
          <label>Nome:</label>
          <input type="text" name="nome" placeholder="" value="<?php echo $dados['nome']; ?>">
            <button class="btn btn-primary" type="submit">Alterar</button>
        </p></div>
    </form>

    <form action="processar_email.php" method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start" style="padding: 10px;">
          <p class="lead fw-normal mb-0 me-3">
          <input type="hidden" name="id" placeholder="" value="<?php echo $dados['id']; ?>">
          <input type="hidden" name="nome" placeholder="" value="<?php echo $dados['nome']; ?>">
          <label>E-mail:</label>
          <input type="text" name="email" placeholder="" value="<?php echo $dados['email']; ?>">
            <button class="btn btn-primary" type="submit">Alterar</button>
        </p></div>
    </form>
    <div class="container bg-opacity-50 bg-danger" style="padding: 20px;">
    <form action="processar_aula.php" method="POST">
                <p class="text-center fw-bold m-auto">Registros:</p>
            <input type="hidden" name="id" placeholder="" value="<?php echo $dados['id']; ?>">
          <input type="hidden" name="nome" placeholder="" value="<?php echo $dados['nome']; ?>">
          <input type="hidden" name="aulas_old" placeholder="" value="<?php 
          $espacamento = "&nbsp|&nbsp";
          $formatacao = $dados['aulas'] . $espacamento;
          echo $formatacao;
          ?>">
                 
  <label><?php echo $dados['aulas']; ?></label><br>
  <div class="container-fluid" style="padding: 10px; background-color: floralwhite;">
  <p class="leal fw-bold mb-0 me-3" style="color: black;">Faça seu registro diário:</p>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Registro diário" id="floatingTextarea" name="reg_aula"></textarea>
  <label for="floatingTextarea">Digite o registro</label>
  <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
           <p class="lead fw-normal mb-2 me-3">
          <label>Financeiro:
          <input type="hidden" name="financeiro_pago" placeholder="Financeiro_pago" value="<?php echo $dados['financeiro_pago']; ?>">
          <input type="hidden" name="divida_paga" placeholder="divida_paga" value="<?php echo $dados['divida_paga']; ?>">
          <input type="hidden" name="divida_ativa" placeholder="" value="<?php echo $dados['divida_ativa']; ?>">
          <input type="hidden" name="valor_aula" placeholder="" value="<?php echo $dados['valor_aula']; ?>">
          <input type="hidden" name="financeiro_old" placeholder="" value="<?php echo $dados['financeiro_aberto']; ?>">
          <select name="financeiro_new" id="financeiro_new">
            <option value="1">Aberto</option>
            <option value="2">Pago</option>
            

          </select>
</label>
        </p><br><br></div>
<div class="container">
  <div class="row">
<label>Pagamento: 
<?php

if($dados['divida_ativa'] >= 1){
              echo "Aberto R$";
              echo $dados['divida_ativa'];
              echo ",00";
              
              ?><a class="btn btn-primary" href="financeiro.php?busca=<?php echo $dados['nome'];?>" role="button">Financeiro</a>
             
              <?php
}if($dados['divida_ativa'] == 0){
              echo "OK";
}else{
  
}

?></label>
</div>
</div>
  <button class="btn btn-primary" type="submit">Registrar</button></form></div>
</div>
    
</div>
</div>
  
                   </div>

  </tr>
  <?php


}
} ?>
<?php
}
  ?></div>  
</tbody>
</table>
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