<?php

session_start();
include 'conexao.php';

if ((isset($_POST['usuario'])) && (isset($_POST['senha']))){
  $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
  $senha = mysqli_real_escape_string($conn, $_POST['senha']);
  $senha = md5($senha);


  $sql = "SELECT * FROM login WHERE nome_usuario = '$usuario' && senha = '$senha' LIMIT 1 ";
  $result = mysqli_query($conn, $sql);
  $resultado = mysqli_fetch_assoc($result);

  if(empty($resultado)){
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("location:index.php");
  }elseif(isset($resultado)){
    header("location: painel.php");
  }



}else{
  $_SESSION['loginErro'] = "Usuário ou senha invalido";
  header("location: index.php");
}

?>