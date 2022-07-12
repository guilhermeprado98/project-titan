<?php

include 'conexao.php';

$id = $_POST['idproduto'];
$nomeproduto = $_POST['nomeproduto'];
$corproduto = $_POST['corproduto'];
$preco = $_POST['preco'];


$sql = "INSERT INTO `estoque`(`nomeproduto`, `corproduto`, `preco`,`id_estoque`) VALUES ('$nomeproduto','$corproduto',$preco, $id)";

$inserir = mysqli_query($conexao, $sql);

?>

<div class="container" style="margin-top: 20px">
   <center>
      <h4>Produto adicionado com sucesso!</h4>
   </center>
   <div style="padding-top: 20px">
      <center>

         <a href="../view/adicionar_produto.php">
            <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Cadastrar novo Produto</button>
         </a>
      </center>
   </div>


</div>