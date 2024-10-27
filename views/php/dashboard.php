<?php
  include("../../controllers/config.php");
  include("../../controllers/protect.php");
  ?>
    <html>
      <head>
        <link rel="stylesheet" href="../../models/style/dash.css">
      </head>
      <body>
        <header>
          <div class="logo"><a href="home.php"><img src="" alt="Logo"></a></div>
        
          <div class="dropbutton-container">
            <button class="dropbutton" onclick="toggleDropdown()">Menu</button>
            <div id="dropdown-content" class="dropdown-content">
                <a href="../../models/functions/php/logout.php">Logout</a>
            </div>
          </div>
        </header>
        <section class="main-container">
        <h1>dashboard</h1>
        <?php 
          if($_SESSION['userType'] == "adm"){
            ?>
            <div class="block-container">
              <div class="block box-biblioteca">
                <div class="top">
                  <h3>Bibliotecas:</h3>
                </div>
                <div class="mid">
                  <?php
                    $sqlcode = "SELECT * FROM bibliotecas";
                    $slqquery = $conn->query($sqlcode);
                    $qtdBibliotecas = $slqquery->num_rows;
                    echo "<p>{$qtdBibliotecas}</p>";
                  ?>
                </div>
                <div class="bottom">
                  <a href="">Gerenciar bibliotecas</a>
                </div>
              </div>
              <div class="block create-biblioteca">
                <input type="button" class="create-btn" value="Criar Biblioteca">
                <form action="../../models/functions/php/createBiblioteca.php" method="post">
                  <label for="biblio_cod">Código</label>
                  <input type="text" id="biblio_cod" name="biblio_cod" required>
                  <label for="biblio_nome">Nome</label>
                  <input type="biblio_nome" id="biblio_nome" name="biblio_nome" required>
                  <label for="biblio_end">End</label>
                  <input type="text" id="biblio_end" name="biblio_end" required>
                  <label for="biblio_estado">Estado</label>
                  <input type="text" id="biblio_estado" name="biblio_estado" required>
                  <label for="biblio_dataCriacao">Data de Criação</label>
                  <input type="date" id="biblio_dataCriacao" name="biblio_dataCriacao" required>
                  <button type="submit">Cadastrar</button>
                </form>
              </div>
            </div>
          <?php
          }
          if($_SESSION['userType'] == "func"){
          ?>
            <div class="block-container">
              <div class="block"></div>
              <div class="block"></div>
              <div class="block"></div>
              <div class="block"></div>
            </div>
          <?php
          }
        ?>
        </section><!--Section do conteúdo-->
        <footer>
          <p>Todos os direitos reservados</p>
        </footer><!--Rodapé-->
        <script src="../../models/functions/js/dropBtnDashBoard.js"></script>
      </body>
    </html>
  <?php
?>