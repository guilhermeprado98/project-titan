<?php

include 'conexao.php';
$id = $_GET['id'];

?>


<html>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <title>Formulário de Edição</title>


   <style type="text/css">
   #tamanhoContainer {
      width: 500px;
   }

   #button-cadastrar {
      margin-top: 10px;
   }

   .form-group {
      padding-bottom: 20px;
   }

   .form-control {
      width: 500px;
      height: 30px;
   }
   </style>


</head>

<body>

   <center>

      <div class="container" id="tamanhoContainer" style="margin-top: 40px">
         <h2>Formulário de Edição para Produtos</h2>

         <a href="../view/listar_produtos.php">
            <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Voltar aos Produtos</button>
         </a>

         <form action="atualizar_produto.php" method="post" style="margin-top: 20px;">

            <?php

            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";

            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
               $id_estoque = $array['id_estoque'];
               $nomeproduto = $array['nomeproduto'];
               $corproduto = $array['corproduto'];
            ?>


            <div class="form-group">
               <label>ID do Produto</label>
               <input type="number" name="idproduto" class="form-control" value="<?php echo $id_estoque ?>" disabled>
               <input type="number" name="id" class="form-control" value="<?php echo $id ?>" style="display: none">
               <br>
            </div>
            <div class="form-group">
               <label>Nome Produto</label>
               <input type="text" name="nomeproduto" class="form-control" value="<?php echo $nomeproduto ?>">
               <br>
            </div>

            <div class="form-group">
               <label>Preço</label>
               <select class="form-control" name="precoproduto" required>

                  <?php

                     include 'conexao.php';
                     $sql = "SELECT * FROM categoria order by preco ASC";
                     $buscar = mysqli_query($conexao, $sql);

                     while ($array = mysqli_fetch_array($buscar)) {

                        $id_preco = $array['id_preco'];
                        $preco = $array['preco'];


                     ?>

                  <option><?php echo $preco ?></option>

                  <?php } ?>

               </select>
               <br>
            </div>



            <button type="submit" id="button-cadastrar" class="btn btn-warning" style=" background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Atualizar</button>

            <?php
            } ?>

         </form>
      </div>

   </center>

</body>

</html>