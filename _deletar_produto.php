<?php 

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conn, $sql);

?>
<?php header("location: listar_produtos.php") ?>