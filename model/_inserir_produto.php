<?php

include 'conexao.php';


$idproduto = $_POST['idproduto'];
$nomeproduto = $_POST['nomeproduto'];
$quantidadeproduto = $_POST['quantidadeproduto'];
$categoriaproduto = $_POST['categoriaproduto'];
$marcaproduto = $_POST['marcaproduto'];


$sql = "INSERT INTO `estoque`(`idproduto`, `nomeproduto`, `quantidadeestoque`, `categoriaproduto`, `marcaproduto`) VALUES ($idproduto,'$nomeproduto',$quantidadeproduto,'$categoriaproduto','$marcaproduto')";

$inserir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px">
   <center>
      <h4>Produto adicionado com sucesso!</h4>
   </center>
   <div style="padding-top: 20px">
      <center>
         <a href="../view/adicionar_produto.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Produto</a>
      </center>
   </div>


</div>