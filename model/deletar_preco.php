<?php

include 'conexao.php';

$id = $_GET['id'];


$sql = "DELETE FROM `categoria` WHERE id_preco = $id";

$deletar = mysqli_query($conexao, $sql);

?>

<script>
javascript: alert('Preço adicionado com Sucesso!');
javascript: window.location = '../view/listar_precos.php';
</script>