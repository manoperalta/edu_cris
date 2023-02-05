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
 <?php include('meta.php'); ?>
 
</head>

<body>
  <header>
 <?php include('nav.php'); ?>
 
  </header>
  <main>
    <div class="container">
    <p class="text-center m-11" style="color: black;">Dashboard</p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-70">
      <img src="img/pagina-de-destino.gif" class="card-img-top" alt="...">
      <div class="card-body ">
        <p class="card-text text-center">
        <a class="btn btn-primary" href="cadastrar.php" role="button">Cadastrar</a>
        </div>
      <div class="card-footer">
        <small class="text-muted">Cadastro Geral de Usuários</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-70">
      <img src="img/calendario.gif" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text text-center">
        <a class="btn btn-primary" href="agenda.php" role="button">Agenda</a>

      </div>
      <div class="card-footer">
        <small class="text-muted">Agendamentos</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-70">
      <img src="img/bolsa-de-dinheiro.gif" class="card-img-top" alt="...">
      <div class="card-body">
      <p class="card-text text-center">
        <a class="btn btn-primary" href="financeiro.php" role="button">Financeiro</a>

      </div>
      <div class="card-footer">
        <small class="text-muted">Controle Financeiro</small>
      </div>
    </div>
  </div>
</div>
<p>
<?php
include('painel_central.php'); ?>


  <footer>
    <?php include('footer.php');?>
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
