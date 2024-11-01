<?php
  include("../../controllers/config.php");
  include("../../controllers/protect.php");
  if($_SESSION['userType'] == "func"){
    $tipoPedido = $_GET['tipoPedido'];
  }
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
      <?php
        if($tipoPedido == 1){
          ?>
          <table border=1>
            <thead>
              <tr>
                <td>Id:</td>
                <td>Livros</td>
                <td>Tipo:</td>
                <td>Ações</td>
              </tr>
            </thead>
            <?php
              $tablePedidos = "pedidos".$_SESSION['biblioCod'];
              $sqlcode = "SELECT * FROM $tablePedidos WHERE pedido_tipo = 1 AND pedido_visto = 0";
              $sqlquery = $conn->query($sqlcode);
              $qtdPedidos = $sqlquery->num_rows;
              if($qtdPedidos >= 1){
                for($i = 1; $i <= $qtdPedidos; $i++){
                  $pedido = $sqlquery->fetch_assoc();
                  echo "<tr>";
                  echo "<td>{$pedido['pedido_id']}</td>";
                }
              }
            ?>
          </table>
          <?php
        }else if($tipoPedido == 0){
          ?>
          <table border=1>
            <thead>
              <tr>
                <td>Id:</td>
                <td>Livros</td>
                <td>Tipo:</td>
                <td>Ações</td>
              </tr>
            </thead>
            <?php
              $tablePedidos = "pedidos".$_SESSION['biblioCod'];
              $sqlcode = "SELECT * FROM $tablePedidos WHERE pedido_tipo = 0 AND pedido_visto = 0";
              $sqlquery = $conn->query($sqlcode);
              $qtdPedidos = $sqlquery->num_rows;
              if($qtdPedidos >= 1){
                for($i = 1; $i <= $qtdPedidos; $i++){
                  $pedido = $sqlquery->fetch_assoc();
                  echo "<tr>";
                  echo "<td>{$pedido['pedido_id']}</td>";
                }
              }
            ?>
          </table>
          <?php
        }
      ?>
    </section>
    <footer>
      <p>Todos os direitos reservados</p>
    </footer><!--Rodapé-->
    <script src="../../models/functions/js/dropBtnDashBoard.js"></script>
  </body>
</html>