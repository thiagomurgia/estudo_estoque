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

  <?php include 'estaticos/menu.php'?>
  <div class="containerListar">
  <div class="container" id="containerCategorias">
    <h3>Lista de Fornecedores</h3>

    <table class="table table-hover table-dark">
  <thead>
    <tr>

      <th scope="col">Nome Fornecedor</th>
      <th scope="col" style="text-align: center;">Ação</th>
      
      


    </tr>
  </thead>
  
    <tr>
      <?php

        include 'conexao.php';

        $sql = "SELECT * FROM `fornecedor`";
        $busca = mysqli_query($conn, $sql);

        while ($array = mysqli_fetch_array($busca)){

          $id_fornecedor    = $array['id_fornecedor'];
          $nome_fornecedor  = $array['nome_fornecedor'];


        
      
      
      ?>
    <tr>
      <th><?php echo $nome_fornecedor?></th>
<th style="text-align: center;">
      <a href="_deletar_fornecedor.php?id=<?php echo $id_fornecedor ?>"><button type="button" class="btn btn-outline-danger bt-sm" style="color:#fff;" role="button"><i class="fas fa-trash-alt"></i><small>&nbsp;Excluir</small></button></a>
      </th>


      <?php } ?>
    </tr>

    </tr>
    </table>
  </div>
<div class="container" id="containerCategorias">
  <form  action="_inserir_fornecedor.php" method="POST">
  <div class="form-group">
      <label>Adicionar novo fornecedor</label>
      <input type="text" name="fornecedor"class="form-control" placeholder="Insira um novo fornecedor" required>
    </div>
    <div id="containerBotao">


      
      <button type="submit" class="btn btn-outline-success btn-sm">Adicionar &nbsp;<i class="far fa-plus-square"></i></button>
    </div>
  </form>
  </div>
  </div>
  </div>
  








  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>





