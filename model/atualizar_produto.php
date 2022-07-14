<?php

include 'conexao.php';

$id = $_POST['id'];

$nomeproduto = $_POST['nomeproduto'];
$precoproduto = $_POST['precoproduto'];


$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`preco`='$precoproduto' WHERE id_estoque = $id";


$atualizar = mysqli_query($conexao, $sql);


?>

<script>
javascript: alert('Produto atualizado com Sucesso!');
javascript: window.location = '../view/listar_produtos.php';
</script>