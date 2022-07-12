<?php

include 'conexao.php';

$id = $_GET['id'];


$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao, $sql);

?>
<meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container" style="width: 400px">

   <center>
      <h3>Deletado com sucesso!</h3>
      <a href="../view/listar_produtos.php" class="btn btn-sm btn-warning">Voltar</a>
   </center>

</div>