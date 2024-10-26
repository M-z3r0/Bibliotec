<?php
  include("../../controllers/config.php");
  include("../../controllers/protect.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Barra Lateral</title>
    <link rel="stylesheet" href="../../models/style/home.css">
</head>
<body>
  <header>
      <div class="logo">Logo</div>
      <div class="search-bar">
          <input type="text" placeholder="Pesquisar...">
          <button class="search-btn">🔍</button>
      </div>
      <div class="user-icon"><a href="dashboard.php">👤</a></div>
  </header>
  <section class="main-container">
      <aside class="sidebar">
          <div class="icon">🔶</div>
          <div class="icon">🔶</div>
          <div class="icon">🔶</div>
          <div class="icon">🔶</div>
      </aside>
      <div class="content">
          <h1>Texto</h1>
          <?php
            switch(@$_REQUEST['actions']){

              default:
                include("../sub/php/defaultInclude.php");
              break;
            }
          ?>
      </div>
  </section>
  <footer>
      Rodapé
  </footer>
</body>
</html>
