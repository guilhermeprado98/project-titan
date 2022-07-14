<?php


require_once '../model/conexao.php';

?>

<html>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />

   <title>Formulário de Cadastro</title>


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
      <div class="container" id="tamanhoContainer" style="margin-top: 50px">
         <h1>Cadastrar Produtos</h1>

         <a href="../index.php">
            <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Voltar ao Menu</button>
         </a>

         <form action="../model/_inserir_produto.php" method="post" style="margin-top: 20px;">


            <div class="form-group">
               <label>ID do Produto</label>
               <input type="number" name="idproduto" class="form-control" placeholder="Insira o ID do Produto" required>
               <br>
            </div>

            <div class=" form-group">
               <label>Nome do Produto</label>
               <input type="text" name="nomeproduto" class="form-control" placeholder="Insira o nome do Produto"
                  required>
               <br>
            </div>

            <div class="form-group">
               <label>Cor do Produto</label>
               <input type="string" name="corproduto" class="form-control" placeholder="Insira a cor do Produto"
                  required>
               <br>
            </div>


            <div class=" form-group">
               <label>Preço</label>
               <select class="form-control" name="preco" required>
                  <option value="">Selecione o preço para o produto.</option>



                  <?php


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

            <button type="submit" id="button-cadastrar" class="btn btn-success" style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Cadastrar</button>






         </form>
      </div>
   </center>



</body>

</html>