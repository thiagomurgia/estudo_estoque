<?php

  include 'conexao.php';


  $nroProd = $_POST['nroProd'];
  $nomeProd = $_POST['nomeProd'];
  $categoria = $_POST['categoria'];
  $nroQuantidade = $_POST['nroQuantidade'];
  $fornecedor = $_POST['fornecedor'];

  /*para fazer a conferência de valores pode chamar
    um echo com o nome da variavel

    echo $nomeProd; */

    //a partir de agora é para fazer a inserção

    $sql = "INSERT INTO `estoque`(`nroProd`, `nomeProd`, `categoria`, `nroQuantidade`, `fornecedor`)
    VALUES ($nroProd, '$nomeProd', '$categoria', $nroQuantidade, '$fornecedor')";

    //abaixo é o comando para puxar o "include 'conexao.php'" para incluir no banco

    $inserir = mysqli_query($conn, $sql);
    

?>

<?php header("location: listar_produtos.php") ?>