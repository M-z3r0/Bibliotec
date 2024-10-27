<?php
  include("../../controllers/config.php");
  include ("../../controllers/protect.php");
  if(!isset($_SESSION)){
    session_start();
  }
?>
<html>
  <head>

  </head>
  <body>
    <h1 style="text-align:left;">Catálogo</h1>
    <div class="main-container">
      <?php
        $biblioCod = $_SESSION['biblioCod'];
        $tableLivro = "livro".$biblioCod;
        $sqlcode = "SELECT * FROM $tableLivro";
        $sqlquery = $conn->query($sqlcode);
        $qtdLivro = $sqlquery->num_rows;
        if($qtdLivro >= 1){
          for($i = 1; $i <= $qtdLivro; $i++){
            $livro = $sqlquery->fetch_assoc();
            $livroCod = $livro['livro_cod'];
            ?>
              <div class="book">
                <?php
                  echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img style='width:50px;' src='../../{$livro['livro_capa']}'></a>";
                ?>
              </div>
            <?php
          }
        }
      ?>
    </div>
  </body>
</html>