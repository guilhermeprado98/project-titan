<?php

include 'conexao.php';

$id = $_POST['id_preco'];

$categoria = $_POST['categoria'];


$sql = "UPDATE `categoria` SET `preco` = $categoria WHERE id_preco = $id";


$atualizar = mysqli_query($conexao, $sql);


?>

<script>
javascript: alert('Preço atualizado com Sucesso!');
javascript: window.location = '../view/listar_precos.php';
</script>