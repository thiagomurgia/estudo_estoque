<?php 

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
$deletar = mysqli_query($conn, $sql);

?>
<?php header("location: adicionar_categoria.php") ?>