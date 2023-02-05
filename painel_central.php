<?php
include('conexao.php');
include('protect.php');
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
  <div class="container m-auto text-center">
    <input name="busca" placeholder="" type="hidden" value="<?php echo $dia_plus; ?>">
    <button class="btn btn-primary" type="submit" role="button">Agenda de Hoje</button>
</form></div>
<table class="table" border="1">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Contato</th>
      <th scope="col">Agenda</th>
      <th scope="col">Ações</th>
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
        $nome_aula = $dados['nome'];
  ?>
  <tr>
    <td style="font-size: x-small;"><?php echo $dados['id']; ?></td>
    <td style="font-size: x-small;"><?php echo $nome_aula; ?></td>
    <td style="font-size: x-small;"><a class="whatsapp-link" href="https://api.whatsapp.com/send?phone=55<?php echo $dados['fone']; ?>&text=Olá!%0DVocê está recebendo as atividades desenvolvidas hoje:%0D<?php echo $dados['reg_aula']; ?>"><img src="img/whatsapp.png" class="media-object  img-responsive img-thumbnail" style="max-width: 35px;"></a></td>
    <td style="font-size: x-small;"><?php echo $dados['agenda']; ?></td>
    <td>
    <div class="container">
  <div class="row" style="padding: 10px;">
  <div class="col-4 col-sm-1">
    <form action="aula.php">
<input name="busca" placeholder="" type="hidden" value="<?php echo $dados['nome']; ?>">
        <button class="btn btn-primary" style="font-size: small;" type="submit" role="button">R</button>

</form></div>
<div class="col-4 col-sm-1">
<form action="editar.php">
<input name="busca" placeholder="" type="hidden" value="<?php echo $dados['nome']; ?>">
        <button class="btn btn-primary" style="font-size: small;" type="submit" role="button">E</button>

</form></div>
<div class="col-4 col-sm-1">
<form action="financeiro.php">
<input name="busca" placeholder="" type="hidden" value="<?php echo $dados['nome']; ?>">
        <button class="btn btn-primary" style="font-size: small;" type="submit" role="button">$</button>

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
<div class="container text-center">
<div class="row">
<div class="col-2 m-auto">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Segunda-Feira">
        <button class="btn btn-primary" style="font-size: x-small;" type="submit" role="button">Segunda</button>

</form></div>
<div class="col-2 m-auto">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Terça-Feira">
        <button class="btn btn-primary" style="font-size: x-small;" type="submit" role="button">Terça</button>

</form></div>
<div class="col-2 m-auto">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Quarta-Feira">
        <button class="btn btn-primary" style="font-size: x-small;" type="submit" role="button">Quarta</button>

</form></div>
<div class="col-2 m-auto">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Quinta-Feira">
        <button class="btn btn-primary" style="font-size: x-small;" type="submit" role="button">Quinta</button>

</form></div>
<div class="col-2 m-auto">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Sexta-Feira">
        <button class="btn btn-primary" style="font-size: x-small;" type="submit" role="button">Sexta</button>

</form></div>
<div class="col-2 m-auto">
<form action="">
<input name="busca" placeholder="" type="hidden" value="Sabado">
        <button class="btn btn-primary" style="font-size: x-small;" type="submit" role="button">Sábado</button>

</form></div>
</div>
</tbody>
</table>
</div>
</main></div>