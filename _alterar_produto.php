<?php 

include 'conexao.php';

$id = $_POST['id'];
$nomeProd = $_POST['nomeProd'];
$categoria = $_POST['categoria'];
$nroQuantidade = $_POST['nroQuantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeProd` = '$nomeProd', `categoria` = '$categoria', `nroQuantidade` = $nroQuantidade, `fornecedor` = '$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conn, $sql);

?>
<?php header("location: aprovar_usuario.php") ?>

