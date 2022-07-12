<?php


require_once '../model/conexao.php';

?>

<html>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <title>Formulário de Cadastro</title>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <style type="text/css">
   #tamanhoContainer {
      width: 500px;
   }

   #button-cadastrar {
      margin-top: 10px;
   }
   </style>


</head>

<body>

   <div class="container" id="tamanhoContainer" style="margin-top: 40px">
      <h4>Formulário de Cadastro para Produtos</h4>

      <form action="../model/_inserir_produto.php" method="post" style="margin-top: 20px;">

         <div class="form-group">
            <label>ID do Produto</label>
            <input type="number" name="idproduto" class="form-control" placeholder="Insira o ID do Produto" required>
            <br>
         </div>
         <div class=" form-group">
            <label>Nome Produto</label>
            <input type="text" name="nomeproduto" class="form-control" placeholder="Insira o nome do Produto" required>
            <br>
         </div>

         <div class=" form-group">
            <label>Quantidade de Estoque</label>
            <input type="number" name="quantidadeproduto" class="form-control" placeholder="Insira o estoque do Produto"
               required>
            <br>
         </div>


         <div class=" form-group">
            <label>Categoria</label>
            <select class="form-control" name="categoriaproduto" required>

               <?php


               $sql = "SELECT * FROM categoria order by categoria ASC";
               $buscar = mysqli_query($conexao, $sql);

               while ($array = mysqli_fetch_array($buscar)) {

                  $id_categoria = $array['id_categoria'];
                  $categoria = $array['categoria'];


               ?>

               <option><?php echo $categoria ?></option>

               <?php } ?>

            </select>
            <br>
         </div>


         <div class=" form-group">
            <label>Marca</label>
            <select class="form-control" name="marcaproduto" required>

               <?php

               include 'conexao.php';
               $sql = "SELECT * FROM marca order by marca ASC";
               $buscar = mysqli_query($conexao, $sql);

               while ($array = mysqli_fetch_array($buscar)) {

                  $id_marca = $array['id_marca'];
                  $marca = $array['marca'];


               ?>

               <option><?php echo $marca ?></option>

               <?php } ?>
            </select>
         </div>

         <button type="submit" id="button-cadastrar" class="btn btn-success">Cadastrar</button>

         <div style="text-align: right; margin-top: -38px;">
            <a href="menu.php" id="button-voltar" class="btn btn-warning">Voltar ao Menu</a>
         </div>



      </form>
   </div>


   <!-- JavaScript Bundle with Popper -->
   <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
   </script>

</body>

</html>