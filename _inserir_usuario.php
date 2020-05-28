
<?php 

include_once ("conexao.php"); ?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <script src="https://kit.fontawesome.com/f8ee2ba870.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
$nome_usuario = $_POST['nome_usuario'];
$email   = $_POST['email'];
$nome_completo = $_POST['nome_completo'];
$senha = md5($_POST['senha']);
$nivelusuario = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO `login`(`nome_usuario`,`email`, `nome_completo`,`senha`, `nivelusuario`,`status`) VALUES ('$nome_usuario','$email','$nome_completo','$senha','$nivelusuario','$status')";

$inserir = mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) > 0){ ?>

  <div class="modal" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="text-align:center">Cadastro realizado com sucesso!</h5>
        
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





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>

<script>
  $(document).ready(function () {
    $('#myModal').modal('show');
  });
</script>



