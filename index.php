<!DOCTYPE html>
<html>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <title>Tela de Login</title>


   <style type="text/css">
   #tamanho {
      width: 350px;
      margin-top: 100px;
      border-radius: 20px;
      border: 2px solid #f3f3f3;
      padding: 2px;

   }

   #button-entrar {
      background-color: green;
      color: white;
      margin-top: 10px;
   }
   </style>


</head>

<body>

   <center>

      <div class="container" id="tamanho">
         <center>
            <img src="imagem/cadeado.png">
         </center>

         <form action="view/validar_login.php" method="POST">
            <div class="form-group" style="padding-bottom: 20px">
               <label>Usuário</label>
               <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off">
            </div>
            <div class="form-group">
               <label>Senha</label>
               <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off">
            </div>



            <div style="text-align: center">

               <button type="submit" id="button-entrar" class="btn btn-sucess">Entrar</button>

         </form>
      </div>
   </center>

</body>




</html>