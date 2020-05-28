<?php
include 'conexao.php';

$id = $_GET['id'];

?>



<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body>


  <div class="container" id="divPrincipal">
    <h3>Formulário de Cadastro</h3>
  <form  action="_alterar_produto.php" method="POST">

    <?php
    $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";

    $buscar = mysqli_query($conn, $sql);
    while ($array = mysqli_fetch_array($buscar)) {

          $id_estoque    = $array['id_estoque'];
          $nroProd       = $array['nroProd'];
          $nomeProd      = $array['nomeProd'];
          $categoria     = $array['categoria'];
          $nroQuantidade = $array['nroQuantidade'];
          $fornecedor    = $array['fornecedor']; 

    ?>

  <div class="form-group">
      <label>Nro Produto</label>
      <input type="number" name="nroProd"class="form-control" value ="<?php echo $nroProd ?>" disabled >
      <input type="number" name="id" class="form-control" value ="<?php echo $id ?>" style="display: none" >

    </div>
    <div class="form-group">
      <label>Nome Produto</label>
      <input type="text" name="nomeProd" class="form-control" required autocomplete="off" value ="<?php echo $nomeProd ?>"> <!--usar quando for um campo obrigatório-->

    </div> 

      <div class="form-group">
    <label>Categoria</label>
    <select class="form-control" name="categoria" value ="<?php echo $categoria ?>">
        <option>Periféricos</option>
        <option>Hardware</option>
        <option>Software</option>
        <option>Celulares</option>

    </select>
    </div>

    <div class="form-group">
      <label>Quantidade</label>
      <input type="number" name="nroQuantidade" class="form-control" value ="<?php echo $nroQuantidade ?>">


    <div class="form-group">
    <label>Fornecedor</label>
    <select class="form-control" name="fornecedor" value ="<?php echo $fornecedor ?>">
        <option>Fornecedor A</option>
        <option>Fornecedor B</option>
        <option>Fornecedor C</option>
        <option>Fornecedor D</option>

    </select>
    </div>
    <div id="containerBotao">

      <a href="listar_produtos.php" role="button" class="btn btn-sm btn-info">Voltar </a>

      <button type="submit" class="btn btn-success btn-sm">Alterar</button>

      
      
    </div>
    <?php } ?>
  </form>
  </div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>