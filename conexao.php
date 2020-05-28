<?php

$SERVIDOR = "localhost";
$USUARIO = "root";
$SENHA = "";
$BD = "estudo_estoque";

$conn = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BD);

if(!$conn){
  die("Falha na conexao" . mysqli_connect_error());
}
?>