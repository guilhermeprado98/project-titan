<?php

require_once '../model/conexao.php';

?>

<html>

<head>

   <title>Listagem de Produtos</title>
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <link rel="icon" href="../img/logo-titan.jpg" type="image/x-icon" />


   <script src="https://kit.fontawesome.com/d4c221cbd7.js" crossorigin="anonymous"></script>


   <style>
   .table {
      border-spacing: 30px;
   }

   table,
   th,
   td {
      border: 1px solid black;
      border-collapse: collapse;
   }

   th,
   td {
      padding-top: 10px;
      padding-bottom: 20px;
      padding-left: 30px;
      padding-right: 40px;
   }
   </style>


</head>

<body>


   <div class="container" style="margin-top: 50px; padding-left: 15px">

      <a href="../index.php">
         <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Voltar ao Menu</button>
      </a>

      <h3>Lista de Produtos</h3>
      <br>
      <table class="table">
         <thead>
            <tr>
               <th scope="col">ID Produto</th>
               <th scope="col">Nome do Produto</th>
               <th scope="col">Cor</th>
               <th scope="col">Preço do Produto</th>
               <th scope="col">Ações</th>

            </tr>
         </thead>
         <tr>
            <?php

            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
               $id_produto = $array['id_estoque'];
               $nomeproduto = $array['nomeproduto'];
               $corproduto = $array['corproduto'];
               $preco = $array['preco'];
            ?>
         <tr>
            <td><?php echo $id_produto ?></td>
            <td><?php echo $nomeproduto ?></td>
            <td> <?php echo $corproduto ?></td>
            <td><?php echo $preco ?></td>

            <td>
               <a class="btn btn-warning btn-sm" href="../model/editar_produto.php?id=<?php echo $preco ?>"
                  role="button">
                  <i class="far fa-edit "></i>&nbsp;Editar</a>
               <a class="btn btn-danger btn-sm" href="../model/deletar_produto.php?id=<?php echo $preco ?>"
                  role="button">
                  <i class="far fa-trash-alt "></i>&nbsp;Excluir</a>
            </td>

         </tr>
         <?php
            } ?>
         </tr>

      </table>

   </div>

</body>

</html>