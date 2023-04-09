<?php

include '../Util.php';

Util::verificar();

?>
<html>
  <head>
    <title>PHP Test</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
		<h3 style="text-align: center;">Sistema de Estoque</h3>
		<?php
				echo "<center><h4>Seja bem vindo usuário " .$_SESSION['login'],"</h4></center>";
		?>
    <br><br>
    <div class="container">
      <div class="d-grid gap-0" style="text-align: center;">
        <a class="btn btn-primary btn-lg" href="UsuarioList.php">Listar Usuários</a> <br>
        <a class="btn btn-primary btn-lg" href="ProdutoList.php">Listar Produtos</a> <br>
        <a class="btn btn-primary btn-lg" href="VendedorList.php">Listar Vendedores</a>
        <br><a href="login.php?sair=1" class="btn btn-danger btn-lg">Sair</a>
      </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>