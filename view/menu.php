<?php

require_once '../model/conexao.php';

?>


<html>

<head>

   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />

   <title>Menu</title>



</head>


<body>

   <?php


   session_start();
   $usuario = $_SESSION['usuario'];

   if (!isset($_SESSION['usuario'])) {
      header('Location: index.php');
   }

   $sql = "SELECT nivel_usuario FROM usuarios WHERE nome_usuario = '$usuario'";
   $buscar = mysqli_query($conexao, $sql);


   $array = mysqli_fetch_array($buscar);

   $nivel = $array['nivel_usuario'];

   ?>

   <div class="container" style="margin-top: 50px">


      <center>
         <h1>CRUD Produtos</h1>
      </center>


      <center>

         <a href="../index.php" class="btn btn-sm btn-warning">
            <button style="background-color: blue; color:white; font-size: 17px; font-weight: 600">Sair do
               Sistema</button>
         </a>
      </center>


      <div class=" row">

         <?php
         if ($nivel == 1) {
         ?>

         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h2 class="card-title">Adicionar Produtos</h2>
                  <p class="card-text">Opção para adicionar Produtos no Estoque.</p>
                  <a href="adicionar_produto.php" class="btn btn-sm btn-warning">
                     <button style="background-color: blue; color:white; font-size: 17px; font-weight: 600">Cadastrar
                        Produto</button>
                  </a>
               </div>
            </div>
         </div>

         <?php
         } ?>

         <?php
         if (($nivel == 1) || ($nivel == 2)) {
         ?>

         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h2 class="card-title">Lista de Produtos</h2>
                  <p class="card-text">Visualizar, Editar e Excluir.</p>
                  <a href="listar_produtos.php" class="btn btn-sm btn-warning">
                     <button
                        style="background-color: blue; color:white; font-size: 17px; font-weight: 600">Produtos</button>
                  </a>
               </div>
            </div>
         </div>
         <?php
         } ?>


         <?php
         if ($nivel == 1) {
         ?>
         <div class="col-sm-6" style=" margin-top: 20px">
            <div class="card">
               <div class="card-body">
                  <h2 class="card-title">Adicionar Cor</h2>
                  <p class="card-text">Opção para adicionar Cores aos Produtos.</p>


                  <a href="listar_produtos.php" class="btn btn-sm btn-warning">
                     <button style="background-color: blue; color:white; font-size: 17px; font-weight: 600">Cadastrar
                        Cor</button>
                     <p></p>
                     <a href="listar_produtos.php" class="btn btn-sm btn-warning">
                        <button style="background-color: blue; color:white; font-size: 17px; font-weight: 600">Lista de
                           Cores</button>
                     </a>
               </div>
            </div>
         </div>
         <?php
         } ?>

      </div>

      <div class="container" style="width: 400px; padding-top: 10px">

      </div>

   </div>


</body>

</html>