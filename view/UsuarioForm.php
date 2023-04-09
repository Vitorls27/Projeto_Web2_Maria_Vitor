<?php 
include "../controller/UsuarioController.php";
include '../Util.php';
Util::verificar();

$usuario = new UsuarioController();

  if(!empty($_POST['id'])){
    $usuario->update($_POST);
    header("location: UsuarioList.php");

  } elseif(!empty($_POST)) {
    $usuario->salvar($_POST);
    header("location: UsuarioList.php");

  }

  if(!empty($_GET['id'])){
    $data = $usuario->buscar($_GET['id']);
  }
?>
<html>
  <head>
    <title>PHP Test</title>
    <link href="" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>Formulário Usuário</h1>
        <form action="UsuarioForm.php" method="POST">

            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/>
            <div class="col-7">
            <label style="font-size: 120%;"> Nome</label><br>
            <input type="text" class="form-label" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>"/><br>
            </div>
            <div class="col-7">
            <label style="font-size: 120%;">Telefone</label><br>
            <input type="text" class="form-label" name="telefone" value="<?php echo !empty($data->telefone) ? $data->telefone : "" ?>"/><br>
          </div>
          <div class="col-7">
            <label style="font-size: 120%;"> CPF</label><br>
            <input type="text" class="form-label" name="cpf" value="<?php echo !empty($data->cpf) ? $data->cpf : "" ?>"/><br>
            </div>
            <input type="submit" value="Salvar" class="btn btn-dark btn-lg"/>
            <a class="btn btn-danger btn-lg" href="UsuarioList.php">Voltar</a>
        </form>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
</html>