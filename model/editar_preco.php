<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<html>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <link rel="stylesheet" href="../css/style.css">
   <title>Alterar Preço</title>
</head>

<body>
   <center>
      <div class="container" id="tamanhoContainer" style="margin-top: 40px">
         <h1>Atualizar Preço</h1>

         <a href="../view/listar_precos.php">
            <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Voltar aos Preços</button>
         </a>

         <form action="atualizar_preco.php" method="post" style="margin-top: 20px;">

            <?php

            $sql = "SELECT * FROM `categoria` WHERE id_preco = $id";

            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
               $id_preco = $array['id_preco'];
               $preco = $array['preco'];
            ?>


            <div class="form-group">
               <label>Valor Preço</label>
               <input type="text" name="categoria" class="form-control" value="<?php echo $preco ?>">
               <input type="number" name="id_preco" class="form-control" value="<?php echo $id_preco ?>"
                  style="display: none">
               <br>
            </div>

            <button type="submit" id="button-cadastrar" class="btn btn-warning" style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Atualizar</button>
            <div style="text-align: right; margin-top: -35px;">

            </div>


            <?php
            } ?>

         </form>
      </div>
   </center>

</body>

</html>