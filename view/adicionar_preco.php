<!DOCTYPE html>
<html>

<head>

   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <link rel="stylesheet" href="../css/style.css">
   <title>Adicionar preco</title>

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
               <input type="text" name="categoria" class="form-control"
                  placeholder="Insira em formato decimal. Exemplo: R$10,50 = 10.50 | R$1899,99 = 1899.99" required>
               <br>
            </div>

            <button type="submit" id="button-cadastrar" style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Cadastrar Preço</button>



         </form>
      </div>

   </center>

</body>



</html>