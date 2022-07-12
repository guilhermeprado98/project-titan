<?php

require_once '../model/conexao.php';
include 'script/password.php';


$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];


$sql = "SELECT nome_usuario, senha_usuario FROM usuarios WHERE nome_usuario = '$usuario'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);


while ($array = mysqli_fetch_array($buscar)) {
   $senha = $array['senha_usuario'];
}

if ($total > 0) {

   if ($senhausuario == $senha) {

      session_start();
      $_SESSION['usuario'] = $usuario;

      header('Location: menu.php');
   } else {
      header('Location: error.php');
   }
} else {
   header('Location: error.php');
}