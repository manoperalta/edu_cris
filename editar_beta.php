<?php
include('protect.php');
include('conexao.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Editor</title>
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
  <li><a class="dropdown-item" href="#">Cadastrar</a></li>  
  <li><a class="dropdown-item" href="#">Agendar</a></li>
    <li><a class="dropdown-item" href="#">Editar</a></li>
    <li><a class="dropdown-item" href="#">Financeiro</a></li>
  </ul>
</div>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h7 class="text-center m-auto" style="color: aquamarine;">Bem-vindo ao Painel, <?php echo $_SESSION['nome'];?>
</h7>
  </div>
</nav>
  </header>
  <main>
    <p class="text-center m-auto" style="color: black;">Dashboard - Editar</p>
    
    <form action="">
    <input name="busca" placeholder="Digite o Dado" type="text">
    <button type="submit">Pesquisar</button>
</form>

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
    <td>ID: <?php echo $dados['id']; ?><br></td>
    <td>Nome: <?php echo $dados['nome']; ?><br></td>
    <td>E-mail: <?php echo $dados['email']; ?><br></td>
    <td>Agenda:<br><?php echo $dados['agenda']; ?><br><hr></td>


  </tr>
  <?php


}
} ?>
<?php
}

  ?>
<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
<hr>
</div>

    <form action="processar_editor.php" method="POST">
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
           <p class="lead fw-normal mb-1 me-3">
          <p class="h4">Editar:</p></p></div>
         
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">
             <label>ID:</label>
            <input type="text" name="id" placeholder="" value="<?php echo $_SESSION['id'];?>">
           </p></div>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">
             <label>Nome/Aluno:</label>
            <input type="text" name="nome" placeholder="" value="<?php echo $_SESSION['nome'];?>">
           </p></div>
           <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">
             <label>E-mail:</label>
            <input type="email" name="email" placeholder="" value="<?php echo $_SESSION['email'];?>">
           </p></div>
           <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">
             <label>Senha:</label>
            <input type="password" name="senha" placeholder="*******" value="<?php echo $_SESSION['senha'];?>">
           </p></div>
           Agenda:<br><?php echo $_SESSION['agenda']; ?><br><hr>
                                       
        <p class="text-center m-auto">Agendamento:</p><br></br>
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
           <p class="lead fw-normal mb-1 me-3">
          <label>Agenda 1x:
          <select name="agenda" id="agenda">
          <option value=""></option>  
          <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select>
          <p class="lead fw-normal mb-0 me-3">
            <label>Horário 1x</label>
            <input type="text" name="horario1x" placeholder="" value="">
                    </p></p>
                    <p class="lead fw-normal mb-1 me-3">
          <label>Agenda 2x:
          <select name="agenda2x" id="agenda2x">
          <option value=""></option>  
          <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select>
          <p class="lead fw-normal mb-0 me-3">
                        <label>Horário 2x</label>
            <input type="text" name="horario2x">
        </p></p>
</label></div>
<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
<p class="lead fw-normal mb-1 me-3">
          <label>Agenda 3x:
          <select name="agenda3x" id="agenda3x">
          <option value=""></option>  
          <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select>
          <p class="lead fw-normal mb-0 me-3">
            <label>Horário 3x</label>
            <input type="text" name="horario3x">
                    </p></p>
                    <p class="lead fw-normal mb-1 me-3">
          <label>Agenda 4x:
          <select name="agenda4x" id="agenda4x">
          <option value=""></option>
            <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select>
          <p class="lead fw-normal mb-0 me-3">
                        <label>Horário 4x</label>
            <input type="text" name="horario4x">
        </p></p>
</label>
        </p><br><br>
        </p><br><br></div>
                  <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">
            <button type="submit">Editar</button>
        </p></div>

          </div></form></div>
          <div>
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
    
