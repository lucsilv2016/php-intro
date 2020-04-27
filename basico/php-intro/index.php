<!-- Crie um formulário para que o usuário possa através de uma página web 
preencher o nome e a idade dos competidores. Esses dados deverão ser 
utilizados para exibir em qual categoria o competidor se encaixa, 
infantil, adolescente ou adulto -->
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <title>Formulário de inscrição</title>
  <?php
    $mensagemDeSucesso = obterMensagemSucesso();
    if (!empty($mensagemDeSucesso)) 
    {
      echo $mensagemDeSucesso;
    }
    $mensagemDeErro = obterMensagemErro();
    if (!empty($mensagemDeErro)) 
    {
      echo $mensagemDeErro;
    }

  ?>
  <meta name="author" context="">
  <meta name="description" context="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

  <form action="script.php" method="post">
    <p> Seu nome: <input type="text" name="nome"/></p>
    <p> Sua idade: <input type="text" name="idade"/></p>
    <p> <input type="submit" value="Enviar dados do competidor"/></p>
  </form>  
</body>
</html>