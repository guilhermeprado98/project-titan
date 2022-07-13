<?php

include 'conexao.php';

$id = $_POST['id'];

$nomeproduto = $_POST['nomeproduto'];
$precoproduto = $_POST['precoproduto'];


$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`preco`='$precoproduto' WHERE preco = $id";


$atualizar = mysqli_query($conexao, $sql);


?>

<div class="container" style="padding-top: 40px">

   <center>
      <h3>Produto atualizado com sucesso!</h3>

      <a href="../view/listar_produtos.php">
         <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Lista de Produto</button>
      </a>

   </center>

</div>