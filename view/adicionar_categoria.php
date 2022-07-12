<!DOCTYPE html>
<html>

<head>

   <title>Adicionar Categoria</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <style type="text/css">
   #tamanhoContainer {
      width: 500px;
   }

   #button-cadastrar {
      margin-top: 10px;
   }
   </style>


</head>

<body>

   <div class="container" id="tamanhoContainer" style="margin-top: 40px">
      <h4>Formulário de Cadastro de Categoria
      </h4>

      <form action="../model/_inserir_categoria.php" method="post" style="margin-top: 20px;">

         <div class=" form-group">
            <label>Nome da Categoria</label>
            <input type="text" name="categoria" class="form-control" placeholder="Insira o nome da Categoria" required>
            <br>
         </div>

         <button type="submit" id="button-cadastrar" class="btn btn-success">Cadastrar Categoria</button>

         <div style="text-align: right; margin-top: -38px;">
            <a href="../view/menu.php" id="button-voltar" class="btn btn-warning">Voltar ao Menu</a>
         </div>



      </form>
   </div>



</body>


<!-- JavaScript Bundle with Popper -->
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
   integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
   integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>


</html>