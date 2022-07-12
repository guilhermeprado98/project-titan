<?php

include 'conexao.php';

$id = $_GET['id'];


$sql = "DELETE FROM `categoria` WHERE id_preco = $id";

$deletar = mysqli_query($conexao, $sql);

?>

<div class="container" style="padding-top: 40px">

   <center>
      <h3>Deletado com sucesso!</h3>

      <a href="../view/listar_precos.php" class="btn btn-sm btn-warning">
         <button style="background-color: #ededed; color:black; font-size: 17px; font-weight: 600">Voltar</button>
      </a>

   </center>

</div>