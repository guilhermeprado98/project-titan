<?php

include 'conexao.php';

$id = $_POST['idproduto'];
$nomeproduto = $_POST['nomeproduto'];
$corproduto = $_POST['corproduto'];
$preco = $_POST['preco'];


$desconto1 = 20;
$desconto2 = 10;
$desconto3 = 5;

if ($corproduto == 'Azul' || 'Vermelho') {
   $new_price = $preco - ($preco * $desconto1 / 100);
}
if ($corproduto == 'Amarelo') {
   $new_price = $preco - ($preco * $desconto2 / 100);
} elseif ($corproduto == 'Vermelho' and $preco > 50) {
   $new_price = $preco - ($preco * $desconto3 / 100);
} else {
   $new_price = $preco;
}

$preco_format = number_format($new_price, 2, ',', '.');

$sql = "INSERT INTO `estoque`(`nomeproduto`, `corproduto`, `preco`,`id_estoque`) VALUES ('$nomeproduto','$corproduto','$preco_format', $id)";

$inserir = mysqli_query($conexao, $sql);

?>

<!-- <div class="container" style="margin-top: 20px">
   <center>
      <h2>Produto adicionado com sucesso!</h2>
   </center>
   <div style="padding-top: 20px">
      <center>

         <a href="../view/adicionar_produto.php">
            <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Cadastrar novo Produto</button>
         </a>
      </center>
   </div>


</div> -->
<script>
javascript: alert('Produto adicionado com Sucesso!');
javascript: window.location = '../view/adicionar_produto.php';
</script>