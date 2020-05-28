<?php 

include 'conexao.php';

$id_login = $_GET['id_login'];
$nivelusuario = $_GET['nivelusuario'];


if($nivelusuario == 1){
  $update = "UPDATE login SET status='Ativo', nivel_usuario = 1 WHERE id_login = $id";
  $atualiza = mysqli_query($conn, $update);
  echo "Admin aprovado";
}if($nivelusuario == 2){
  $update = "UPDATE login SET status='Ativo', nivel_usuario = 2 WHERE id_login = $id";
  $atualiza = mysqli_query($conn, $update);
  echo "Admin 2";
}if($nivelusuario == 3) {
  $update = "UPDATE login SET status='Ativo', nivel_usuario = 3 WHERE id_login = $id";
  $atualiza = mysqli_query($conn, $update);
  echo "Admin 3";
}


/*
if(mysqli_affected_rows($conn) > 0){ ?>

  <div class="modal" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="text-align:center">Usuário(s) APROVADO(S) com sucesso!</h5>
        
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
*/