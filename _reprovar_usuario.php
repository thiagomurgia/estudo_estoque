<?php 

include 'conexao.php';

$id = $_GET['id'];
$nivelusuario = $_GET['nivelusuario'];

$sql = "DELETE FROM `login` WHERE id_login = $id";
$deletar = mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) > 0){ ?>

  <div class="modal" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="text-align:center">Usuário Excluído com sucesso!</h5>
        
      </div>
      <div class="modal-body">
        <p style="color:#88C425; font-size: 100px; text-align:center"><i class="fas fa-check-circle"></i></p>
      </div>
      <div class="modal-footer">
        <a href="index.php"><button type="button" class="btn btn-success">Ok</button></a>
        
      </div>
    </div>
  </div>
</div>
<?php }else{
  echo "modal erro";
}
?>


<?php header("location: aprovar_usuario.php") ?>