<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <script src="https://kit.fontawesome.com/f8ee2ba870.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include 'estaticos/menu.php' ?>

  

  
  <div class="containerListar">
  <div class="container">
    <h3>Usuário(s) pendente(s)</h3>

    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Nome Usuario</th>
      <th scope="col">Nome Completo</th> 
      <th scope="col">E-mail</th>  
      <th scope="col">Nível Usuário</th>
      <th scope="col">Reprovar</th>
      
    </tr>
  </thead>
  
    <tr>
      <?php

        include 'conexao.php';

        $sql = "SELECT * FROM `login` WHERE `status` = 'Inativo'";
        $busca = mysqli_query($conn, $sql);

        while ($array = mysqli_fetch_array($busca)){

          $email           = $array['email'];
          $nome_completo   = $array['nome_completo'];
          $nome_usuario    = $array['nome_usuario'];
          $nivelusuario    = $array['nivelusuario'];
          $status          = $array['status']; 
          $id_login        = $array['id_login'];

        
      
      
      ?>
    <tr>
      <th><?php echo $nome_usuario?></th>
      <th><?php echo $nome_completo?></th>
      <th><?php echo $email?></th>
      
      
      
      <th><select class="form-control form-control-sm" name="nivelusuario" id="nivelusuario" required>
            <option value="1">Administrador</option>
            <option value="2">Operacional</option>
            <option value="3">Conferente</option>

        </select></th>
  
      <th>
        <a href="_usuario_aprovado.php?id=<?php echo $id_login ?>"><button type="button" class="btn btn-outline-success bt-sm" style="color:#fff" href="#" role="button"><i class="fas fa-check-circle"></i><small>&nbsp;Aprovar</small></button></a>
        <a href="_reprovar_usuario.php?id=<?php echo $id_login ?>"><button type="button" class="btn btn-outline-danger bt-sm" style="color:#fff" href="#" role="button"><i class="fas fa-times-circle"></i><small>&nbsp;Excluir</small></button></a>
        
      </th>
      </th>


      

      <?php } ?>
    </tr>
  
</table>
  </div>
  <div class="container" style="text-align: right">
      
   



  </div>

  </div>
  




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>