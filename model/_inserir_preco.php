<?php

include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO `categoria`(`preco`) VALUES ('$categoria')";

$inserir = mysqli_query($conexao, $sql);

?>

<script>
javascript: alert('Preço adicionado com Sucesso!');
javascript: window.location = '../view/adicionar_preco.php';
</script>