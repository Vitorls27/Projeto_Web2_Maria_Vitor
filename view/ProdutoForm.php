<?php 
include "../controller/ProdutoController.php";
include '../Util.php';
Util::verificar();

$produto = new ProdutoController();

  if(!empty($_POST['id'])){
    $produto->update($_POST);
    header("location: ProdutoList.php");

  } elseif(!empty($_POST)) {
    $produto->salvar($_POST);
    header("location: ProdutoList.php");

  }

  if(!empty($_GET['id'])){
    $data = $produto->buscar($_GET['id']);
  }
?>
<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Formulário Produto</h1>
        <form action="ProdutoForm.php" method="POST">

            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/>
            <div class="col-7">
            <label style="font-size: 120%;"> Nome</label><br>
            <input type="text" class="form-label" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>"/>
            </div>
            <div class="col-7">
            <label style="font-size: 120%;">Valor</label><br>
            <input type="text" class="form-label" name="valor" value="<?php echo !empty($data->valor) ? $data->valor : "" ?>"/>
          </div>
          <div class="col-7">
            <label style="font-size: 120%;">Quantidade</label><br>
            <input type="text" class="form-label" name="quantidade" value="<?php echo !empty($data->quantidade) ? $data->quantidade : "" ?>"/><br><br>
          </div>
            <input type="submit" value="Salvar" class="btn btn-dark btn-lg"/>
            <a class="btn btn-danger btn-lg" href="ProdutoList.php">Voltar</a>
        </form>
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
</html>