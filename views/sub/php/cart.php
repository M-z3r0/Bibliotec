<?php
  include("../../controllers/config.php");
  include ("../../controllers/protect.php");
  if(!isset($_SESSION)){
    session_start();
  }
?>
<html>
  <head>
    <link rel="stylesheet" href="../../models/style/carrinho.css">
  </head>
  <h1>Mochila</h1>
  <div class="m-container">
  <?php
    if($_SESSION['userType'] == "aluno"){
      $tableCarrinho = "carrinho".$_SESSION['biblioCod'];
      $alunoRm = $_SESSION['userCod'];
      $slqcode = "SELECT * FROM $tableCarrinho WHERE aluno_rm = '$alunoRm'";
      $sqlquery = $conn->query($slqcode);
      $qtdRowAffected = $sqlquery->num_rows;
      if($qtdRowAffected == 1){
        $carrinho = $sqlquery->fetch_assoc();
        if($carrinho['carrinho_livro1'] != null){
          $livroCod = $carrinho['carrinho_livro1'];
          $livroTable = "livro".$_SESSION['biblioCod'];
          $slqcode = "SELECT * FROM $livroTable WHERE livro_cod = '$livroCod'";
          $sqlquery = $conn->query($slqcode);
          $qtdLivro = $sqlquery->num_rows;
          if($qtdLivro == 1){
            $livro = $sqlquery->fetch_assoc();
            ?>
            <div class="book-sec">
            <?php
              echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img style='width:50px;' src='../../{$livro['livro_capa']}'></a>";
            ?>
              <form action="../../models/functions/php/removeFromCart.php" method="GET">
                <?php 
                  echo "<input style='visibility:hidden;position:absolute;' name='livro1'>";
                ?>
                <button>Remover</button>
              </form>
            </div>
            <?php
          }
        }
        if($carrinho['carrinho_livro2'] != null){
          $livroCod = $carrinho['carrinho_livro2'];
          $livroTable = "livro".$_SESSION['biblioCod'];
          $slqcode = "SELECT * FROM $livroTable WHERE livro_cod = '$livroCod'";
          $sqlquery = $conn->query($slqcode);
          $qtdLivro = $sqlquery->num_rows;
          if($qtdLivro == 1){
            $livro = $sqlquery->fetch_assoc();
            ?>
            <div class="book-sec">
            <?php
              echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img style='width:50px;' src='../../{$livro['livro_capa']}'></a>";
            ?>
              <form action="../../models/functions/php/removeFromCart.php" method="get">
                <?php 
                  echo "<input style='visibility:hidden;position:absolute;' name='livro2'>";
                ?>
                <button>Remover</button>
              </form>
            </div>
            <?php
          }
        }
        if($carrinho['carrinho_livro3'] != null){
          $livroCod = $carrinho['carrinho_livro3'];
          $livroTable = "livro".$_SESSION['biblioCod'];
          $slqcode = "SELECT * FROM $livroTable WHERE livro_cod = '$livroCod'";
          $sqlquery = $conn->query($slqcode);
          $qtdLivro = $sqlquery->num_rows;
          if($qtdLivro == 1){
            $livro = $sqlquery->fetch_assoc();
            ?>
            <div class="book-sec">
            <?php
              echo "<a href='../../views/php/home.php?actions=book&livroCod={$livroCod}'><img style='width:50px;' src='../../{$livro['livro_capa']}'></a>";
            ?>
              <form action="../../models/functions/php/removeFromCart.php" method="get">
                <?php 
                  echo "<input style='visibility:hidden;position:absolute;' name='livro3'>";
                ?>
                <button>Remover</button>
              </form>
            </div>
            <?php
          }
        }
        if($carrinho['carrinho_livro1'] == null && $carrinho['carrinho_livro2'] == null && $carrinho['carrinho_livro3'] == null){
          echo "<p> punha o livro aqui voz mice</p>";
        }
      }
     
  ?>
  <div class="pedido">
  <?php
    if($carrinho['carrinho_livro1'] != null || $carrinho['carrinho_livro2'] != null || $carrinho['carrinho_livro3'] != null){
      ?>
      <form action="../../models/functions/php/confirmOrderPegar.php">
        <button>Confirmar pedido</button>
      </form>
  </div></div>
      <?php
    } 
  }
  ?>
</html>