<?php
  include('../../../controllers/config.php');
  if(isset($_POST['biblio_cod']) && isset($_POST['biblio_nome']) && isset($_POST['biblio_end']) && isset($_POST['biblio_estado']) && isset($_POST['biblio_dataCriacao'])){
    $biblio_cod = $_POST['biblio_cod'];
    $biblio_nome = $_POST['biblio_nome'];
    $biblio_end = $_POST['biblio_end'];
    $biblio_estado = $_POST['biblio_estado'];
    $biblio_dataCriacao = $_POST['biblio_dataCriacao'];
    $sqlcode = "INSERT INTO bibliotecas(biblio_cod,biblio_nome,biblio_endereco,biblio_estado,biblio_dataCriacao) VALUES('$biblio_cod','$biblio_nome','$biblio_end','$biblio_estado','$biblio_dataCriacao')";
    $slqquery = $conn->query($sqlcode);
    {
      $tableLivro = "livro".$biblio_cod;
    }
    {

    }
    {

    }
    {

    }
  }                  
?>