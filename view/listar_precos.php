<?php

require_once '../model/conexao.php';

?>

<html>

<head>
   <title>Listagem de Cor</title>
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <link rel="stylesheet" href="../css/style.css">
   <script src="https://kit.fontawesome.com/d4c221cbd7.js" crossorigin="anonymous"></script>
</head>

<body>

   <div class="container" style="margin-top: 50px; padding-left: 15px">

      <a href="../index.php">
         <button style="background-color: #ededed;
         color:black; font-size: 17px; font-weight: 600">Voltar ao Menu</button>
      </a>
      <h3>Lista de Preços</h3>
      <br>
      <table class="table">
         <thead>
            <tr>
               <th scope="col">ID do Preço</th>
               <th scope="col">Valor do Preço</th>
               <th scope="col">Ações</th>
            </tr>
         </thead>
         <tr>
            <?php

            $sql = "SELECT * FROM `categoria`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
               $id_preco = $array['id_preco'];
               $preco = $array['preco'];

               $preco_format = number_format($preco, 2, ',', '.');
            ?>
         <tr>
            <td><?php echo $id_preco ?></td>
            <td>R$<?php echo $preco_format ?></td>

            <td>
               <a class="btn btn-warning btn-sm" href="../model/editar_preco.php?id=<?php echo $id_preco ?>"
                  role="button">
                  <i class="far fa-edit "></i>&nbsp;Editar</a>
               <a class="btn btn-danger btn-sm" href="../model/deletar_preco.php?id=<?php echo $id_preco ?>"
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