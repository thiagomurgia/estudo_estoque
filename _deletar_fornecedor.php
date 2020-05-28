<?php 

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `fornecedor` WHERE id_fornecedor = $id";
$deletar = mysqli_query($conn, $sql);

?>
<?php header("location: adicionar_fornecedor.php") ?>