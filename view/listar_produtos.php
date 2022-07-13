<?php

require_once '../model/conexao.php';

?>

<html>

<head>

   <title>Listagem de Produtos</title>
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <link rel="icon" href="../img/logo-titan.jpg" type="image/x-icon" />


   <script src="https://kit.fontawesome.com/d4c221cbd7.js" crossorigin="anonymous"></script>
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
   <script type="text/javascript" src="../script.js"></script>


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

   body {
      font-family: 'Karla', 'Arial', sans-serif;
      font-weight: 500;
      background: #fff;
   }

   p {
      padding: 0;
      margin: 0;
   }

   .wrapper {
      height: 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
   }

   .filter-price {
      width: 50%;
      border: 0;
      padding: 0;
      margin: 0;
   }

   .price-container {
      display: flex;
      border: 1px solid #ccc;
      padding: 5px;
      margin-left: 25px;
      width: 100px;

   }

   .price-field {
      position: relative;
      width: 100%;
      height: 36px;
      box-sizing: border-box;
      padding-top: 15px;
      padding-left: -20px;
      padding-right: 150px;

   }

   .price-field input[type=range] {
      position: absolute;
   }

   /* Reset style for input range */

   .price-field input[type=range] {
      width: 100%;
      height: 7px;
      border: 1px solid #000;
      outline: 0;
      box-sizing: border-box;
      border-radius: 5px;
      pointer-events: none;
      -webkit-appearance: none;
   }

   .price-field input[type=range]::-webkit-slider-thumb {
      -webkit-appearance: none;
   }

   .price-field input[type=range]:active,
   .price-field input[type=range]:focus {
      outline: 0;
   }

   .price-field input[type=range]::-ms-track {
      width: 188px;
      height: 2px;
      border: 0;
      outline: 0;
      box-sizing: border-box;
      border-radius: 5px;
      pointer-events: none;
      background: transparent;
      border-color: transparent;
      color: red;
      border-radius: 5px;
   }

   /* Style toddler input range */

   .price-field input[type=range]::-webkit-slider-thumb {
      /* WebKit/Blink */
      position: relative;
      -webkit-appearance: none;
      margin: 0;
      border: 0;
      outline: 0;
      border-radius: 50%;
      height: 10px;
      width: 10px;
      margin-top: -4px;
      background-color: #fff;
      cursor: pointer;
      cursor: pointer;
      pointer-events: all;
      z-index: 100;
   }

   .price-field input[type=range]::-moz-range-thumb {
      /* Firefox */
      position: relative;
      appearance: none;
      margin: 0;
      border: 0;
      outline: 0;
      border-radius: 50%;
      height: 10px;
      width: 10px;
      margin-top: -5px;
      background-color: #fff;
      cursor: pointer;
      cursor: pointer;
      pointer-events: all;
      z-index: 100;
   }

   .price-field input[type=range]::-ms-thumb {
      /* IE */
      position: relative;
      appearance: none;
      margin: 0;
      border: 0;
      outline: 0;
      border-radius: 50%;
      height: 10px;
      width: 10px;
      margin-top: -5px;
      background-color: #242424;
      cursor: pointer;
      cursor: pointer;
      pointer-events: all;
      z-index: 100;
   }

   /* Style track input range */

   .price-field input[type=range]::-webkit-slider-runnable-track {
      /* WebKit/Blink */
      width: 188px;
      height: 2px;
      cursor: pointer;
      background: #555;
      border-radius: 5px;
   }

   .price-field input[type=range]::-moz-range-track {
      /* Firefox */
      width: 188px;
      height: 2px;
      cursor: pointer;
      background: #242424;
      border-radius: 5px;
   }

   .price-field input[type=range]::-ms-track {
      /* IE */
      width: 188px;
      height: 2px;
      cursor: pointer;
      background: #242424;
      border-radius: 5px;
   }

   /* Style for input value block */

   .price-wrap {
      display: flex;
      color: #242424;
      font-size: 14px;
      line-height: 1.2em;
      font-weight: 400;
      margin-bottom: 0px;
   }

   .price-wrap-1,
   .price-wrap-2 {
      display: flex;
      margin-left: 0px;
   }

   .price-title {
      margin-right: 5px;
   }

   .price-wrap_line {
      margin: 6px 0px 5px 5px;
   }

   .price-wrap #one,
   .price-wrap #two {
      width: 30px;
      text-align: right;
      margin: 0;
      padding: 0;
      margin-right: 2px;
      background: 0;
      border: 0;
      outline: 0;
      color: #242424;
      font-family: 'Karla', 'Arial', sans-serif;
      font-size: 14px;
      line-height: 1.2em;
      font-weight: 400;
   }

   .price-wrap label {
      text-align: right;
      margin-top: 6px;
      padding-left: 5px;
   }

   /* Style for active state input */

   .price-field input[type=range]:hover::-webkit-slider-thumb {
      box-shadow: 0 0 0 0.5px #242424;
      transition-duration: 0.3s;
   }

   .price-field input[type=range]:active::-webkit-slider-thumb {
      box-shadow: 0 0 0 0.5px #242424;
      transition-duration: 0.3s;
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
                  <div class="wrapper">
                     <fieldset class="filter-price">

                        <div class="price-field">
                           <input type="range" min="0" max="500" value="135" id="lower">
                           <input type="range" min="0" max="500" value="500" id="upper">
                        </div>
                        <div class="price-wrap">

                           <div class="price-container">
                              <div class="price-wrap-1">

                                 <label for="one"></label>
                                 <input id="one">
                              </div>
                              <div class="price-wrap_line">-</div>
                              <div class="price-wrap-2">
                                 <label for="two"></label>
                                 <input id="two">

                              </div>
                           </div>
                        </div>
                     </fieldset>
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

   <script>
   var lowerSlider = document.querySelector('#lower');
   var upperSlider = document.querySelector('#upper');

   document.querySelector('#two').value = upperSlider.value;
   document.querySelector('#one').value = lowerSlider.value;

   var lowerVal = parseInt(lowerSlider.value);
   var upperVal = parseInt(upperSlider.value);

   upperSlider.oninput = function() {
      lowerVal = parseInt(lowerSlider.value);
      upperVal = parseInt(upperSlider.value);

      if (upperVal < lowerVal + 4) {
         lowerSlider.value = upperVal - 4;
         if (lowerVal == lowerSlider.min) {
            upperSlider.value = 4;
         }
      }
      document.querySelector('#two').value = this.value
   };

   lowerSlider.oninput = function() {
      lowerVal = parseInt(lowerSlider.value);
      upperVal = parseInt(upperSlider.value);
      if (lowerVal > upperVal - 4) {
         upperSlider.value = lowerVal + 4;
         if (upperVal == upperSlider.max) {
            lowerSlider.value = parseInt(upperSlider.max) - 4;
         }
      }
      document.querySelector('#one').value = this.value
   };
   </script>

</body>

</html>