<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao, $sql);

?>
<meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />


<div class="container" style="padding-top: 20px">

   <center>
      <h3>Deletado com sucesso!</h3>

      <a href="../view/listar_produtos.php" class="btn btn-sm btn-warning">
         <button style="background-color: #ededed; color:black; font-size: 17px; font-weight: 600">Voltar</button>
      </a>
   </center>


</div>