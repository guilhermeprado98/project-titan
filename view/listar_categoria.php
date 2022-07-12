<?php

require_once '../model/conexao.php';

?>



<html>

<head>

   <title>Listagem de Categorias</title>


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <script src="https://kit.fontawesome.com/d4c221cbd7.js" crossorigin="anonymous"></script>

</head>

<body>



   <div class="container" style="margin-top: 40px; width: 500px">

      <right>
         <a href="menu.php" id="button-voltar" class="btn btn-warning">Voltar ao Menu</a>
      </right>

      <h3>Lista de Categorias</h3>
      <br>
      <table class="table">
         <thead>
            <tr>
               <th scope="col">ID Categoria</th>
               <th scope="col">Nome da Categoria</th>
               <th scope="col">Ação</th>
            </tr>
         </thead>
         <tr>
            <?php

            $sql = "SELECT * FROM `categoria`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
               $id_categoria = $array['id_categoria'];
               $categoria = $array['categoria'];
            ?>
         <tr>
            <td><?php echo $id_categoria ?></td>
            <td> <?php echo $categoria ?></td>

            <td>
               <a class="btn btn-warning btn-sm" href="../model/editar_categoria.php?id=<?php echo $id_categoria ?>"
                  role="button">
                  <i class="far fa-edit "></i>&nbsp;Editar</a>
               <a class="btn btn-danger btn-sm" href="../model/deletar_categoria.php?id=<?php echo $id_categoria ?>"
                  role="button">
                  <i class="far fa-trash-alt "></i>&nbsp;Excluir</a>
            </td>



         </tr>
         <?php
            } ?>
         </tr>

      </table>

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