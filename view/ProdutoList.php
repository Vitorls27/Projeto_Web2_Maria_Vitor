<?php 
include "../controller/ProdutoController.php";
include '../Util.php';
Util::verificar();

   $produto = new ProdutoController();

  if(!empty($_GET['id'])){
    $produto->deletar($_GET['id']);
    header("location: ProdutoList.php");
  }
  if(!empty($_POST)){
    $load = $produto->pesquisar($_POST);

  }else{
    $load = $produto->carregar();

  }
  
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1><a href="./main.php"><i class="fa-solid fa-arrow-left" style="color: #707070;" ></i></a> Listagem de Produtos</h1>
    <form action="ProdutoList.php" method="post">
        <div class="row" style="text-align: center;">
          <div class="col">
          <select name="campo">
            <option value="nome">Nome</option>
            <option value="valor">Valor</option>
            <option value="quantidade">Quantidade</option>
          </select>
        </div>
        <div class="col-8">
          <input  type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        </div>
        <div class="col" style="text-align: right;">
          <input class="btn btn-danger" type="submit" value="Buscar"/>
          <a class="btn btn-primary" href="ProdutoForm.php">Cadastrar</a>
        </div>
      </form>
  <table class="table table-striped table-sm">
        <tr>
 <th>ID</th>
   <th>Nome</th>
     <th>Valor</th>
     <th>Quantidade</th>
        <th></th>
        <th></th>
        </tr>
    <?php 
    foreach($load as $item){
      echo"<tr>
            <td>$item->id</td>
            <td>$item->nome</td>
            <td>$item->valor</td>
            <td>$item->quantidade</td>
            <td style='text-align: center;'><a href='./ProdutoForm.php?id=$item->id' ><i class='fa-solid fa-pen-to-square' style='color:darkorange'></i></a></td>
            <td style='text-align: center;'><a href='./ProdutoList.php?id=$item->id' onclick='return confirm(\"Deseja Excluir?\")'><i class='fa-solid fa-trash' style='color:red'></i></a></td>
           </tr>";
    }
        ?>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
</html>