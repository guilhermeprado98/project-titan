<?php

include 'conexao.php';

$id = $_POST['id_preco'];

$categoria = $_POST['categoria'];

$sql = "UPDATE `categoria` SET `preco` = $categoria WHERE id_preco = $id";


$atualizar = mysqli_query($conexao, $sql);


?>


<div class="container">

   <center>
      <h3>Preço atualizado com sucesso!</h3>
      <a href="../view/listar_precos.php">
         <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Voltar aos Preços</button>
      </a>

   </center>

</div>