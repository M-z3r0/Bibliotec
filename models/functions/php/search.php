<?php
  include("../../../controllers/config.php");
  include("../../../controllers/protect.php");
  

  $biblioCod = isset($_GET['biblioCod']) ? $_GET['biblioCod'] : $_SESSION['biblioCod'];
  $tableLivro = "livro" . $biblioCod; 

  if (!isset($_GET['pesquisar']) || empty($_GET['pesquisar']) || empty($biblioCod)) {
      header("Location: ../../../views/php/home.php");
      exit;
  }

  $pesquisar = "%" . trim($_GET['pesquisar']) . "%"; 

  /*echo "Searching in table: $tableLivro <br>";
  echo "Search term: $pesquisar <br>";*/

  try {
      $bd = new PDO('mysql:host=localhost;dbname=bibliotec', 'root', '');
      $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = 'SELECT * FROM ' . $tableLivro . ' WHERE livro_titulo LIKE :pesquisar';
      /*echo "SQL Query: $sql <br>"; */

      $sth = $bd->prepare($sql);
      $sth->bindParam(':pesquisar', $pesquisar, PDO::PARAM_STR);
      $sth->execute();

      $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

      /*echo "Number of results: " . count($resultados) . "<br>";*/

  } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      exit;
  }
?>

<!--Página com os resultados da busca-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da busca</title>
    <link rel="stylesheet" href="../../style/searchResult.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
<header>
      <div class="logo"><a href="?actions="><img src="../../models/src/bibliotec.png" class="imglogo" alt="Logo"></a></div>
      <div class="search-bar">
        <form action="../../models/functions/php/search.php">
          <input type="text" name="pesquisar" placeholder="Pesquisar...">
          <button class="search-btn">🔍</button>
        </form>
      </div>
      <div class="user-icon"><a href="dashboard.php">👤</a></div>
  </header>
  <section class="main-container">
      <aside class="sidebar">
        <?php
          if(isset($_SESSION['userType']) && $_SESSION['userType'] == "adm"){
            ?>
              <div class="icon"><a href="?actions=catalogo"><i class="fa-solid fa-book-open fa-xl" style="color: #ffffff;"></i></a></div>
              <!--<div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>-->
            <?php
          }
          if(isset($_SESSION['userType']) && $_SESSION['userType'] == "func"){
            ?>
              <div class="icon"><a href="?actions=cadLivro"><i class="fa-solid fa-book-medical fa-xl" style="color: #ffffff;"></i></a></div>
              <div class="icon"><a href="?actions=listar"><i class="fa-solid fa-book fa-xl" style="color: #ffffff;"></i></a></div>
              <!--<div class="icon"><a href="">🔶</a></div>
              <div class="icon"><a href="">🔶</a></div>-->
            <?php
          }
          if(isset($_SESSION['userType']) && $_SESSION['userType'] == "aluno"){
            ?>
             <div class="icon"><a href="?actions=catalogo"><i class="fa-solid fa-book-open fa-xl" style="color: #ffffff;"></i></a></div>
              <div class="icon"><a href="?actions=carrinho"><i class="fa-solid fa-bag-shopping fa-xl" style="color: #ffffff;"></i> </a></div>
              <!--<div class="icon"><a href="faq.php">🔶</a></div>-->
            <?php
          }
        ?>
      </aside>
      <div class="content">
      <h2>Resultados da busca</h2>
    <div class="search-container">
<<<<<<< HEAD
    <div class="result-container">
      
        <?php
        if (isset($resultados) && is_array($resultados) && count($resultados) > 0) {
            foreach($resultados as $Resultado) {
              ?><div class="search-sec">
                <?php
                $livroCod = $Resultado['livro_cod'];
                echo "<a href='../../../views/php/home.php?actions=book&livroCod={$livroCod}'><img src='../../../{$Resultado['livro_capa']}'></a>";
                echo '<p>' . htmlspecialchars($Resultado['livro_titulo']) . '</p>';
              ?>
              </div>
              <?php
=======
        <?php
        if (isset($resultados) && is_array($resultados) && count($resultados) > 0) {
            foreach($resultados as $Resultado) {
                echo '<label>' . htmlspecialchars($Resultado['livro_cod']) . ' - ' . htmlspecialchars($Resultado['livro_titulo']) . '</label><br>';
>>>>>>> parent of 36f1145 (sessão 13 - 90% pronto)
            }
        } else {
            echo '<label>Não foram encontrados resultados pelo termo buscado</label>';
        }
        ?></div>
    </div>
   
</body>
</html>
