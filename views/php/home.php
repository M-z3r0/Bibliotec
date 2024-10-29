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
    <link rel="stylesheet" href="../../models/style/homepage.css">
</head>
<body>
  <header>
      <div class="logo"><a href="?actions="><img src="" alt="Logo"></a></div>
      <div class="search-bar">
          <input type="text" placeholder="Pesquisar...">
          <button class="search-btn">🔍</button>
      </div>
      <div class="user-icon"><a href="dashboard.php">👤</a></div>
  </header>
  <section class="main-container">
      <aside class="sidebar">
        <?php
          if(isset($_SESSION['userType']) && $_SESSION['userType'] == "adm"){
            ?>
              <div class="icon"><a href="?actions=catalogo">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
            <?php
          }
          if(isset($_SESSION['userType']) && $_SESSION['userType'] == "func"){
            ?>
              <div class="icon"><a href="?actions=cadLivro">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
            <?php
          }
          if(isset($_SESSION['userType']) && $_SESSION['userType'] == "aluno"){
            ?>
             <div class="icon"><a href="?actions=catalogo">🔶</a></div>
              <div class="icon"><a href="?actions=carrinho">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
            <?php
          }
        ?>
      </aside>
      <div class="content">
          <h1>Texto</h1>
          <?php
            switch(@$_REQUEST['actions']){      
              case "cadLivro":
                include("../sub/php/cadLivro.php");
              break;
              case "catalogo":
                include("../sub/php/catalogo.php");
              break;
              case "book":
                include("../sub/php/book.php");
              break;
              case "carrinho":
                include("../sub/php/cart.php");
              break;
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
