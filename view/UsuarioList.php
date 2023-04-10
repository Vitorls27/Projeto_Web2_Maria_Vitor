<?php 
include "../controller/UsuarioController.php";
include '../Util.php';
Util::verificar();

   $usuario = new UsuarioController();

  if(!empty($_GET['id'])){
    $usuario->deletar($_GET['id']);
    header("location: UsuarioList.php");
  }
  if(!empty($_POST)){
    $load = $usuario->pesquisar($_POST);

  }else{
    $load = $usuario->carregar();

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
    <h1><a href="./main.php"><i class="fa-solid fa-arrow-left" style="color: #707070;"></i></a> Listagem de Usuários</h1>
    <form action="UsuarioList.php" method="post">
        <div class="row" style="text-align: center;">
          <div class="col">
          <select name="campo">
        <option value="nome">Nome</option>
        <option value="telefone">Telefone</option>
        <option value="cpf">CPF</option>

      </select>
</div>
<div class="col-8">
      <input  type="text" class="form-control" placeholder="Pesquisar" name="valor" />
</div>
<div class="col" style="text-align: right;">
      <input class="btn btn-danger" type="submit" value="Buscar"/>
      <a class="btn btn-primary" href="UsuarioForm.php">Cadastrar</a>
</div>
  </form>
  <table class="table table-striped table-sm">
        <tr>
 <th>ID</th>
   <th>Nome</th>
     <th>Telefone</th>
     <th>CPF</th>
        <th></th>
        <th></th>
        </tr>
    <?php 
    foreach($load as $item){
      echo"<tr>
            <td>$item->id</td>
            <td>$item->nome</td>
            <td>$item->telefone</td>
            <td>$item->cpf</td>
            <td style='text-align: center;'><a href='./UsuarioForm.php?id=$item->id' ><i class='fa-solid fa-pen-to-square' style='color:darkorange'></i></a></td>
            <td style='text-align: center;'><a href='./UsuarioList.php?id=$item->id' onclick='return confirm(\"Deseja Excluir?\")'><i class='fa-solid fa-trash' style='color:red'></i></a></td>
           </tr>";
    }
        ?>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
</html>