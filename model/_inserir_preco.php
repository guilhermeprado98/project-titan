<?php

include 'conexao.php';


$categoria = $_POST['categoria'];





$sql = "INSERT INTO `categoria`(`preco`) VALUES ('$categoria')";


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