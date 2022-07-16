<?php

include 'conexao.php';

$id = $_POST['idproduto'];
$nomeproduto = $_POST['nomeproduto'];
$corproduto = $_POST['corproduto'];
$preco = $_POST['preco'];


$desconto1 = 20;
$desconto2 = 10;
$desconto3 = 5;


if ($corproduto == 'Amarelo') {
   $new_price = $preco - ($preco * $desconto2 / 100);
} elseif ($corproduto == 'Azul') {
   $new_price = $preco - ($preco * $desconto1 / 100);
} elseif ($corproduto == 'Vermelho' && $preco < 50) {
   $new_price = $preco - ($preco * $desconto1 / 100);
} elseif ($corproduto == 'Vermelho' && $preco > 50) {
   $new_price = $preco - ($preco * $desconto3 / 100);
} else {
   $new_price = $preco;
}



$preco_format = number_format($new_price, 2, ',', '.');



$sql = "INSERT INTO `estoque`(`nomeproduto`, `corproduto`, `preco`,`id_estoque`,`preco_decimal`) VALUES ('$nomeproduto','$corproduto','$preco_format', $id, '$preco')";


$inserir = mysqli_query($conexao, $sql);

?>

<script>
javascript: alert('Produto adicionado com Sucesso!');
javascript: window.location = '../view/adicionar_produto.php';
</script>