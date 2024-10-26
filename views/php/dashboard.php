<?php
  include("../../controllers/config.php");
  include("../../controllers/protect.php");
  if($_SESSION['userType'] == "adm"){
    ?>
      <html>
        <head>
          <link rel="stylesheet" href="../../models/style/dashboard.css">
        </head>
        <header>
          <div class="logo"><a href="home.php"><img src="" alt="Logo"></a></div>
          
          <div class="user-icon"><a href="dashboard.php">👤</a></div>
      </header>
      </html>
    <?php
  }
?>