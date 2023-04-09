<?php 
include "../controller/VendedorController.php";
include '../Util.php';
Util::verificar();

$vendedor = new VendedorController();

  if(!empty($_POST['id'])){
    $vendedor->update($_POST);
    header("location: VendedorList.php");

  } elseif(!empty($_POST)) {
    $vendedor->salvar($_POST);
    header("location: VendedorList.php");

  }

  if(!empty($_GET['id'])){
    $data = $vendedor->buscar($_GET['id']);
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
      <h1>Formulário Vendedor</h1>
        <form action="VendedorForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/>
            <div class="col-7">
            <label style="font-size: 120%;"> Nome</label><br>
            <input type="text" class="form-label"name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>"/><br>
            </div>
            <div class="col-7">
            <label style="font-size: 120%;">Salário</label><br>
            <input type="text" class="form-label" name="salario" value="<?php echo !empty($data->salario) ? $data->salario : "" ?>"/><br>
          </div>
          <div class="col-7">
            <label style="font-size: 120%;">Vendas</label><br>
            <input type="text" class="form-label" name="vendas" value="<?php echo !empty($data->vendas) ? $data->vendas : "" ?>"/><br>
          </div>
            <input type="submit" value="Salvar" class="btn btn-dark btn-lg"/>
            <a class="btn btn-danger btn-lg" href="VendedorList.php">Voltar</a>
        </form>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
</html>