<?php

include 'conexao.php';


$categoria = $_POST['categoria'];

$preco_format = number_format($categoria, 2, ',', '.');

$sql = "INSERT INTO `categoria`(`preco`) VALUES ('R$ $preco_format')";


$inserir = mysqli_query($conexao, $sql);

?>

<div class="container" style="padding-top: 40px">

   <center>
      <h3>Preço adicionado com sucesso!</h3>

      <a href="../view/adicionar_preco.php">
         <button style="background-color: #ededed;
               color:black; font-size: 17px; font-weight: 600">Voltar ao Menu</button>
      </a>
   </center>

</div>