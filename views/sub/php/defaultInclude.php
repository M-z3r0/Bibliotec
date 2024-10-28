<?php
  include("../../controllers/config.php");
  include ("../../controllers/protect.php");
  if(!isset($_SESSION)){
    session_start();
  }
  $tableLivro = "livro".$_SESSION['biblioCod'];
  $biblioCod = $_SESSION['biblioCod'];
?>
<html>
  <head>
    <link rel="stylesheet" href="../../models/style/defaultInclude.css">
  </head>
  <body>
  <div class="container">
        <h2 class="text">Livro Vestibular</h2>
        <div class="book-box">
            <button class="buttons" onclick="backBtn();">◀</button>
            <div class="middle-content" id="middle-content">
              <?php
                for($i = 0; $i <= 250; $i++){
                  ?>
                  <div class="book">
                    <?php
                      echo $i;
                    ?>
                  </div>
                  <?php
                }
              ?>
            </div>
            <button class="buttons" onclick="fowardBtn();">▶</button>
        </div>

        <h2 class="text">Livro mais pegos</h2>
        <div class="book-box">
        <button class="buttons" onclick="backBtn2();">◀</button>
            <div class="middle-content" id="middle-content2">
              <?php
                for($i = 0; $i <= 20; $i++){
                  ?>
                  <div class="book"></div>
                  <?php
                }
              ?>
            </div>
            <button class="buttons" onclick="fowardBtn2();">▶</button>
        </div>

        <h2 class="text">Livro com boa avaliação</h2>
        <div class="book-box">
        <button class="buttons" onclick="backBtn3();">◀</button>
            <div class="middle-content" id="middle-content3">
              <?php
                for($i = 0; $i <= 20; $i++){
                  ?>
                  <div class="book"></div>
                  <?php
                }
              ?>
            </div>
            <button class="buttons" onclick="fowardBtn3();">▶</button>
        </div>
    </div>
    <script src="../../models/functions/js/backAndFowardBtn.js"></script>
  </body>
</html>