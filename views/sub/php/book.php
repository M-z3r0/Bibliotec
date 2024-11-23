<?php
  $livroCod = $_GET['livroCod'];
  $tableLivro = "livro".$_SESSION['biblioCod'];
  $sqlcode = "SELECT * FROM $tableLivro WHERE livro_cod='$livroCod'";
  $sqlquery = $conn->query($sqlcode);
  $livro = $sqlquery->fetch_assoc();
?>

<html>
  <head>
    <link rel="stylesheet" href="../../models/style/bookPage.css">
  </head>
  <body>
    <div class="book-container">
      <!-- Capa do livro -->
      <div class="section cover-section">
        <img class="cover-image" src="<?php echo "../../{$livro['livro_capa']}"; ?> ">
      </div>

      <!-- Sinopse -->
      <div class="section synopsis-section">
        <h1><strong>Sinopse:</strong></h1>
        <p><?php echo $livro['livro_sinopse']?></p>
        <div class="availability">Disponível para empréstimo</div>
      </div>

      <!-- Informações do Livro e Avaliação -->
      <div class="section book-info">
        <p><strong>Título: </strong><?php echo $livro['livro_titulo']?></p>
        <p><strong>Autor: </strong><?php echo $livro['livro_autor']?></p>
        <!--<div class="rating-section">
          <input type="radio" id="rate1" name="rating"><label for="rate1"></label>
          <input type="radio" id="rate2" name="rating"><label for="rate2"></label>
          <input type="radio" id="rate3" name="rating"><label for="rate3"></label>
          <input type="radio" id="rate4" name="rating"><label for="rate4"></label>
        </div>-->
      </div>

      <!-- Inputs adicionais -->
      <div class="input-section">
        <?php
          if($_SESSION['userType'] == "aluno"){
            ?>
              <!--<input type="button" value="Reservar Este">-->
              <form action="../../models/functions/php/addCart.php" method="get">
                <?php $_SESSION['livroCod'] = $livroCod;?>
                <input type="submit" value="Adicionar ao Carrinho">
              </form>
              <!--<input type="button" value="Renovar">-->
            <?php
          }else if($_SESSION['userType'] == "func"){
            ?>
            <form action="/editarLivro.php">
            <?php $_SESSION['livroCod'] = $livroCod;?>
              <input type="button" class="btn-editar" value="Editar">
            </form>
            <?php
          }
        ?>
      </div>
    </div>
  </body>
</html>