<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <script src="https://kit.fontawesome.com/f8ee2ba870.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>

<div class="container" id="loginPrincipal">
  
  <div class="container" id="loginInterno"> 
    <i class="fas fa-person-booth" style="font-size: 50px; color: #B2BAEC"></i>&nbsp;Login


      <div class="container" id="loginInterno2">
      <form method="post" action="_valida_login.php">
        <div class="form-group">
        <label>Nome de usuário:</label>
        <input type="text" name="usuario" class="form-control form-control-sm" placeholder="Nome de Usuário" >      
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control form-control-sm" placeholder="********" >
        </div>
        <div class="container" id="botoes">
          <span><a href="cadastro_usuario.php"><button type="button" style="color: #fff;" class="btn btn-outline-info btn-sm">Cadastrar &nbsp;<i class="fas fa-user-plus"></i></button></a></span>
          <span><button type="submit" style="color: #fff;" class="btn btn-outline-success btn-sm">Entrar &nbsp;<i class="fas fa-power-off"></i></button></span>
        </div>

        <small>
          <div style="margin-top: 10px" class="text-center text-warning">
          <?php
            if(isset($_SESSION['loginErro'])){
              echo $_SESSION['loginErro'];
              unset ($_SESSION['loginErro']);
            }
          ?>
          </div>
        </small>
        



    </form>
    </div>
    <small>
    
    </small>

  </div>
  <small><p style="color: #000; padding-top:10px;">Você não possui cadastro clique <a href="cadastro_usuario_externo.php">aqui!</a><p></small>
</div>


  


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>