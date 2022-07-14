<?php

require_once '../model/conexao.php';

?>

<html>

<head>

   <title>Listagem de Produtos</title>
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <link rel="icon" href="../img/logo-titan.jpg" type="image/x-icon" />


   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://kit.fontawesome.com/d4c221cbd7.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
   <script>
   $(function() {
      $("#slider").slider();
   });
   </script>



   <style>
   .table {
      border-collapse: collapse;
      width: 100%;
      border-spacing: 30px;
   }

   th,
   td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      border: 1px solid black;
      border-collapse: collapse;
   }

   .form-control {
      height: 34px;
      width: 240px;
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
      <table class="table" id="tabela">
         <thead>
            <tr>
               <th scope="col">ID Produto</th>
               <th scope="col">Nome do Produto</th>
               <th scope="col">Cor</th>
               <th scope="col">Preço do Produto</th>
               <th scope="col">Ações</th>

            </tr>
            <tr>
               <th><input type="text" id="txtColuna1" /></th>
               <th><input type="text" id="txtColuna2" /></th>
               <th><select class="form-control" id="txtColuna3" name="cor" required>
                     <option value="">Selecione a cor:</option>


                     <?php


                     $sql = "SELECT * FROM estoque order by corproduto ASC";
                     $buscar = mysqli_query($conexao, $sql);

                     while ($array = mysqli_fetch_array($buscar)) {

                        $cor = $array['corproduto'];


                     ?>

                     <option><?php echo $cor ?></option>

                     <?php } ?>

                  </select></th>
               <th>



                  <div class="row">

                     <div id="slider" class="price-filter-range" name="rangeInput"></div>

                     <div style="margin:30px auto">
                        <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price"
                           class="price-range-field" />
                        <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price"
                           class="price-range-field" />
                     </div>

                     <button class="price-range-search" id="price-range-submit">Search</button>

                     <div id="searchResults" class="search-results-block"></div>
                  </div>



               </th>
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
               <a class="btn btn-warning btn-sm" href="../model/editar_produto.php?id=<?php echo $id_produto ?>"
                  role="button">
                  <i class="far fa-edit "></i>&nbsp;Editar</a>
               <a class="btn btn-danger btn-sm" href="../model/deletar_produto.php?id=<?php echo $id_produto ?>"
                  role="button">
                  <i class="far fa-trash-alt "></i>&nbsp;Excluir</a>
            </td>

         </tr>
         <?php
            } ?>
         </tr>

      </table>

   </div>


   <script>
   $(function() {

      $('#txtColuna3').change(function() {
         var index = $(this).parent().index();
         var nth = "#tabela td:nth-child(" + (index + 1).toString() + ")";
         var selection = $(this).val().toUpperCase();
         $("#tabela tbody tr").show();
         $(nth).each(function() { // me mostra onde ta o range
            if ($(this).text().toUpperCase().indexOf(selection) < 0) {
               $(this).parent().hide();
            }
         })

         $("#tabela select").blur(function() {
            $(this).val("");
         });
      });

   });
   </script>


   <script type="text/javascript" src="../js/slider.js"></script>
   <script type="text/javascript" src="../js/script.js"></script>


</body>

</html>