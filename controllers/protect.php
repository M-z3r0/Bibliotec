<?php
  if(!isset($_SESSION)){
    session_start();
  }
  if(isset($_SESSION['user-type'])){

  }else{
    header("Location: ../../controllers/invalidLogin.php");
  }
?>