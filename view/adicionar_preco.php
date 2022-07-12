<!DOCTYPE html>
<html>

<head>

   <link rel="icon" href="../img/logo-titan.jpg" type="image/x-icon" />
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />


   <title>Adicionar preco</title>

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
         <h1>Cadastrar preco
         </h1>

         <a href="../index.php">
            <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Voltar ao Menu</button>
         </a>


         <form action="../model/_inserir_preco.php" method="post" style="margin-top: 20px;">

            <div class=" form-group">
               <label>Valor do Preço</label>
               <input type="text" name="categoria" class="form-control" placeholder="Insira o valor do preco" required>
               <br>
            </div>

            <button type="submit" id="button-cadastrar" style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Cadastrar Preço</button>



         </form>
      </div>

   </center>

</body>



</html>