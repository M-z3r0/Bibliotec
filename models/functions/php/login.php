<?php
  include("../../../controllers/config.php");
  if(session_status() === PHP_SESSION_ACTIVE){
    session_unset();
    session_destroy();
  }
  if(isset($_POST['log_adm']) && $_POST['log_adm'] == "adm"){
    if(isset($_POST['user_cod']) && isset($_POST['user_password'])){
      $userCod = $_POST['user_cod'];
      $userPassWord = $_POST['user_password'];
      $sqlcode = "SELECT * FROM adm WHERE adm_cod = '$userCod' AND adm_senha = '$userPassWord'";
      $sqlquery = $conn->query($sqlcode);
      $qtdRowAffected = $sqlquery->num_rows;
      if($qtdRowAffected == 1){
        $adm = $sqlquery->fetch_assoc();
        if(!isset($_SESSION)){
          session_start();
        }
        $_SESSION['userType'] = "adm";
        $_SESSION['userCod'] = $adm['adm_cod'];
        $_SESSION['userName'] = $adm['adm_user'];
        header("Location: ../../../views/php/home.php");
      }
    }
  }