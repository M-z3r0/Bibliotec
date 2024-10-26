<?php
  if(!isset($_SESSION)){
    session_start();
  }
  if(isset($_SESSION['userType'])){

  }else{
    header("Location: ../../controllers/invalidLogin.php");
  }
?>