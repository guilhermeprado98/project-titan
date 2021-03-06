<?php

require_once 'model/conexao.php';

?>


<html>

<head>

   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <title>CRUD Produto</title>
   <link rel="stylesheet" href="css/style.css">

</head>


<body>

   <div class="container" style="margin-top: 50px">


      <center>
         <h2>CRUD Produtos</h2>
      </center>


      <div class=" row" style="margin: 15px">


         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h2 class="card-title">Adicionar Produtos</h2>
                  <p class="card-text">Opção para adicionar Produtos.</p>
                  <a href="view/adicionar_produto.php" class="btn btn-sm btn-warning">
                     <button style="background-color: #ededed; color:black; font-size: 17px; font-weight: 600">Cadastrar
                        Produto</button>
                  </a>
               </div>
            </div>
         </div>





         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h2 class="card-title">Lista de Produtos</h2>
                  <p class="card-text">Visualizar, Editar e Excluir.</p>
                  <a href="view/listar_produtos.php" class="btn btn-sm btn-warning">
                     <button
                        style="background-color: #ededed; color:black; font-size: 17px; font-weight: 600">Produtos</button>
                  </a>
               </div>
            </div>
         </div>




         <div class="col-sm-6" style=" margin-top: 20px">
            <div class="card">
               <div class="card-body">
                  <h2 class="card-title">Adicionar Preço</h2>
                  <p class="card-text">Opção para adicionar preços dos Produtos.</p>


                  <a href="view/adicionar_preco.php" class="btn btn-sm btn-warning">
                     <button style="background-color: #ededed; color:black; font-size: 17px; font-weight: 600">Cadastrar
                        Preço</button>
                     <p></p>
                     <a href="view/listar_precos.php" class="btn btn-sm btn-warning">
                        <button style="background-color: #ededed; color:black; font-size: 17px; font-weight: 600">Lista
                           de
                           Preços</button>
                     </a>
               </div>
            </div>
         </div>


      </div>

      <div class="container" style="width: 400px; padding-top: 10px">

      </div>

   </div>


</body>

</html>