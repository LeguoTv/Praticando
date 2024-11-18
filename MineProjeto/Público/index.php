<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Brincadeira</title>
</head>
<body>

<?php session_start(); ?>

    <form action="../controle/armazenar.php" method="post">
         <div class="pai">
             <div class="form">
                 <label class="label" for="name">Nome</label>
                  <input type="text" name="nome" placeholder="Nome" required>
                 <label class="label" for="password">Senha</label>
                  <input type="password" name="senha" placeholder="Senha" required>
                  <input id="button" type="submit" value="Entrar">
                  
                  <?php
                   if (isset($_SESSION['mensagem']))
                    {
                     echo "<div class='mensagem'>" . $_SESSION['mensagem'] . "</div>";
                      unset($_SESSION['mensagem']); 
                    }
                    ?>
             </div> 
         </div>
    </form>
                       
</body>
</html>