<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao, $sql);

?>
<meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />


<script>
javascript: alert('Produto deletado com Sucesso!');
javascript: window.location = '../view/listar_produtos.php';
</script>