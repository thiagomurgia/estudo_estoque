<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <script src="https://kit.fontawesome.com/f8ee2ba870.js" crossorigin="anonymous"></script>
  <script src="script/javascript.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  

  <title>Document</title>
</head>
<body>

<?php include 'estaticos/menu.php' ?>
<h1>Cadastrar Usuário</h1>


<div class="container" id="divPrincipal">

      <div class="container" id="divForm">
      <form method="post" action="_inserir_usuario.php">
        <div class="form-group">
          <label>Nome de usuário:</label>
          
          <input type="text" name="nome_usuario" id="nome_usuario" class="form-control form-control-sm" placeholder="Nome de Usuário" required >

          <label>E-mail:</label>

             <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="Digite seu E-mail" required >

          <label>Nome completo:</label>
              <input type="text" name="nome_completo" id="nome_completo" class="form-control form-control-sm" placeholder="Digite o nome completo"required >

          <label>Senha:</label>
              <input type="password" id="senha" name="senha" id="senha" class="form-control form-control-sm" placeholder="********" required>

          <label>Senha:</label>
              <input type="password" name="valida_senha" id="valida_senha" class="form-control form-control-sm" placeholder="********" oninput="validaSenha(this)"required>
          
          <label>Nível de usuário:</label>
            <select class="form-control form-control-sm" name="nivelusuario" id="nivelusuario" required>
            <option value="1">Administrador</option>
            <option value="2">Operacional</option>
            <option value="3">Conferente</option>

        </select>

        </div>
        <div class="container" id="botoes">
          <button type="submit" value="exibir alerta" style="color: #fff;" class="btn btn-outline-warning btn-sm">Cadastrar &nbsp;<i class="fas fa-user-plus"></i></button>
        </div>
        



    </form>
    </div>

  </div>
</div>


  


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>






</script>
</body>
</html>

