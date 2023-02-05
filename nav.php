<nav class="navbar col-12 position-fixed navbar-dark bg-dark fixed-top" style="z-index: 999;">
        <div class="container-fluid col-11 m-auto">
            <!--Nessa div container foi determinado:
            col-11 que seria utilizado 11 colunas na distribuição
            m-auto para determinar que seria centralizado-->
          <a class="navbar-brand" href="painel.php">Espaço Edu. Prof Cris</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="painel.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastrar.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="editar.php">Editar</a>
                  </li>
                </li>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="busca.php">Buscar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="financeiro.php">Financeiro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="agenda.php">Agenda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">SAIR</a>
                  </li>
            </div>
          </div>
        </div>
    </nav><br><br>

<div class="container-fluid">
  <div class="row" style="background-color: black; padding: 25px;">
      <h7 class="text-center m-auto" style="color: aquamarine;">Bem-vindo ao Painel, <?php echo $_SESSION['nome'];?>
</h7></div>
  </div>
