

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
<?php include 'estaticos/menu.php' ?>
  <div class="containerListar">


  <div class="container" id="divPrincipal">
    <div class="container" id ="divForm">
    <h3>Cadastro de Produto</h3>
  <form  action="_inserir_produto.php" method="POST">
  <div class="form-group">
      <label>Nro Produto</label>
      <input type="number" name="nroProd"class="form-control" placeholder="Insira o número do produto">

    </div>
    <div class="form-group">
      <label>Nome Produto</label>
      <input type="text" name="nomeProd" class="form-control" placeholder="Insira o nome do produto" required autocomplete="off"> <!--usar quando for um campo obrigatório-->

    </div> 

      <div class="form-group">
    <label>Categoria</label>
    <select class="form-control" name="categoria">
        <?php
        include 'conexao.php';
        $sql = "SELECT * FROM categoria";
        $buscar = mysqli_query($conn, $sql);

        while ($array = mysqli_fetch_array($buscar)){

          $id_categoria = $array['id_categoria'];
          $categoria = $array['nome_categoria']

        ?>

        <option><?php echo $categoria ?></option>
        <?php } ?>

    </select>
    </div>

    <div class="form-group">
      <label>Quantidade</label>
      <input type="number" name="nroQuantidade" class="form-control" placeholder="Insira a quantidade">


    <div class="form-group">
    <label>Fornecedor</label>
    <select class="form-control" name="fornecedor">
        <?php
        include 'conexao.php';
        $sql = "SELECT * FROM fornecedor";
        $buscar = mysqli_query($conn, $sql);

        while ($array = mysqli_fetch_array($buscar)){

          $id_categoria = $array['id_fornecedor'];
          $categoria = $array['nome_fornecedor']

        ?>

        <option><?php echo $categoria ?></option>
        <?php } ?>

    </select>
    </div>
    <div id="containerBotao">

      

      <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>

      
      
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