  
 <?php
include('protect.php');
include('conexao.php');

?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Painel de Acesso</title>
  <link rel="icon" type="image/x-icon" href="img/logo.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<?php include('nav.php'); ?>

  </header>
  <body>
  <main>
    <div class="container bg-opacity-10 bg-dark">
    <p class="text-center m-auto" style="color: black;">Dashboard ::: Agenda</p>
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
    <?php 
    $meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
    $diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
    
    $variavel =  date('d/m/Y');
    $variavel = str_replace('/','-',$variavel);
    
    $hoje = getdate(strtotime($variavel));
    
    $dia = $hoje["mday"];
    $mes = $hoje["mon"];
    $nomemes = $meses[$mes];
    $ano = $hoje["year"];
    $diadasemana = $hoje["wday"];
    $nomediadasemana = $diasdasemana[$diadasemana];
    
    echo "$nomediadasemana, $dia de $nomemes de $ano";
    $dia_plus = $nomediadasemana;
    ?>
  <br>
  <a class="btn btn-primary" href="busca.php" role="button">Busca</a><br>
   
  <input name="busca" placeholder="" type="hidden" value="<?php echo $dia_plus; ?>">
        <button class="btn btn-primary" type="submit" role="button">Agenda de Hoje</button>
</form>
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
      <td colspan="3">Relação para Agenda</td>
      
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
    

  </tr>
  <?php


}
} ?>
<?php
}
  ?>
</tbody>
</table>
  </main>
  <div class="container bg-opacity-10 bg-dark text-center">
    <div class="row justify-content-center align-items-center g-2">
      <div class="col-6 col-sm-1">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Segunda-Feira">
        <button class="btn btn-primary" type="submit" role="button">Segunda</button>

</form>
</div>
<div class="col-6 col-sm-1">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Terça-Feira">
        <button class="btn btn-primary" type="submit" role="button">Terça</button>

</form>
</div>
<div class="col-6 col-sm-1">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Quarta-Feira">
        <button class="btn btn-primary" type="submit" role="button">Quarta</button>

</form>
</div>
<div class="col-6 col-sm-1">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Quinta-Feira">
        <button class="btn btn-primary" type="submit" role="button">Quinta</button>

</form>
</div>
<div class="col-6 col-sm-1">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Sexta-Feira">
        <button class="btn btn-primary" type="submit" role="button">Sexta</button>

</form>
</div>
<div class="col-6 col-sm-1">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Sabado">
        <button class="btn btn-primary" type="submit" role="button">Sábado</button>

</form>
</div>
</div>
</div>
  <footer>
    <!-- place footer here -->
    <?php include('footer.php');?>
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