<?php

  include 'conexao.php';


  $categoria = $_POST['categoria'];


  /*para fazer a conferência de valores pode chamar
    um echo com o nome da variavel

    echo $nomeProd; */

    //a partir de agora é para fazer a inserção

    $sql = "INSERT INTO `categoria`(`nome_categoria`)
    VALUES ('$categoria')";

    //abaixo é o comando para puxar o "include 'conexao.php'" para incluir no banco

    $inserir = mysqli_query($conn, $sql);
    

?>

<?php header("location: adicionar_categoria.php") ?>