<?php

include 'conexao.php';

$id = $_POST['id'];

//$idproduto = $_POST['idproduto'];
$nomeproduto = $_POST['nomeproduto'];
$quantidadeestoque = $_POST['quantidadeproduto'];
$categoriaproduto = $_POST['categoriaproduto'];
$marcaproduto = $_POST['marcaproduto'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`quantidadeestoque`=$quantidadeestoque,`categoriaproduto`='$categoriaproduto',`marcaproduto`='$marcaproduto' WHERE id_estoque = $id";


$atualizar = mysqli_query($conexao, $sql);


?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container" style="width: 400px">

   <center>
      <h3>Produto atualizado com sucesso!</h3>
      <a href="../view/listar_produtos.php" class="btn btn-sm btn-warning">Voltar</a>
   </center>

</div>