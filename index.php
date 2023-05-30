<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
  <title>Formulario de registro</title>
</head>
<body>
     <form action="processar_formulario.php" method="POST" class="formulario">
        <h2>Formulario De Registro</h2> 
         <input type="text" name="nome" id="nome" placeholder="Nome" required> <br><br>
      
          <input type="email" name="email" id="email" placeholder="Email" required> <br><br>

         <input type="password" name="senha" id="senha" placeholder="Senha" required> <br><br>

         <input type="submit" value="Registrar" class="button">
     </form>

    <script src="script.js"></script>
</body>
</html>