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
  </header>
  <main>
    <div class="container text-md-center">
    <p class="text-center m-auto" style="color: black;">Dashboard - Cadastro</p>
    <div class="container bg-light text-md-center align-items-center m-auto" style="padding: 3px;">
    <form action="processar.php" method="POST">
        <div class="container">
           <p class="lead fw-normal mb-1 me-3">
          <p class="h4">Cadastrar Novo Usuário:</p></p></div>
          
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-2 me-3">
             <label>*Nome:</label>
            <input type="text" name="nome" placeholder="" value="" size="20" maxlength="100">
           </p></div>

           <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-2 me-3">
             <label>Fone:</label>
            <input type="text" name="fone" placeholder="" value="" size="10" maxlength="20">
           </p></div>

           <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-2 me-3">
             <label>Responsavel:</label>
            <input type="text" name="responsavel" placeholder="" value="" size="15">
           </p></div>

           <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-2 me-3">
             <label>End:</label>
            <input type="text" name="endereco" placeholder="" value="" size="20" maxlength="150">
           </p></div>

           <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
  <p class="lead fw-normal mb-2 me-3">
            <label>*E-mail:</label>
            <input type="email" name="email" size="20">
        </p></div>

        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
  <p class="lead fw-normal mb-2 me-3">
            <label>*Data de Nasc:</label>
            <input type="date" name="data_nasc" size="10">
        </p></div>


        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
  <p class="lead fw-normal mb-2 me-3">
            <label>*Senha:</label>
            <input type="password" name="senha" size="10">
        </p></div>


                     <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
           <p class="lead fw-normal mb-2 me-3">
          <label>Selecione o Tipo:
          <select name="tipo" id="tipo">
            <option value="aluno">Aluno</option>
            <option value="professor">Professor</option>
            <option value="outro">Outro</option>

          </select>
</label>
        </p><br><br></div></div>
        <div class="container m-auto">
        <p class="text-center m-auto">Agendamento:</p>
        </div>
        <div class="container m-auto align-items-center">
        
        <div class="p-2">
         <label>Agenda 1x:
          <select name="agenda" id="agenda">
          <option value=" "></option>  
          <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select>
            <label style="padding: 3px;">Horário 1x</label>
            <input type="text" name="horario1x" size="3" maxlength="5">
                    </p></p></div>
                    <div class="p-2">
                    <label>Agenda 2x:
          <select name="agenda2x" id="agenda2x">
          <option value=" "></option>  
          <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select>
                        <label style="padding: 3px;">Horário 2x</label>
            <input type="text" name="horario2x" size="3" maxlength="5">
        </p></p></div></div>

        <div class="container">
  <div class="p-2">
          <label>Agenda 3x:
          <select name="agenda3x" id="agenda3x">
          <option value=" "></option>  
          <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select>

            <label style="padding: 3px;">Horário 3x</label>
            <input type="text" name="horario3x" size="3" maxlength="5">
                    </p></p></div>
                    <div class="p-2">

          <label>Agenda 4x:
          <select name="agenda4x" id="agenda4x">
          <option value=" "></option>
            <option value="segunda-feira: ">Segunda-Feira</option>
            <option value="terça-feira: ">Terca-Feira</option>
            <option value="quarta-feira: ">Quarta-Feira</option>
            <option value="quinta-feira: ">Quinta-Feira</option>
            <option value="sexta-feira: ">Sexta-Feira</option>
            <option value="sabado: ">Sábado</option>

          </select>
                        <label style="padding: 3px;">Horário 4x</label>
            <input type="text" name="horario4x" size="3" maxlength="5">
        </p></p>
        <button class="btn btn-primary" type="submit">Cadastrar</button></div>
</label>
           
        </p></div>

          </div></form></div>





    
  </main>
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
    
