<!-- Crie um projeto em PHP para uma competição de natação,
 o sistema deverá permitir a inserção de competidores com seu nome
  e idade, e o sistema deverá identificar em qual categoria o nadador 
  irá competir, por exemplo, 6 a 12 anos categoria infantil, 
   13 a 18 categoria adolescente,
   acima de 18 categoria adulto, o sistema deverá retornar a 
   categoria para cada nadador que for cadastrado  -->

   <?php

   include "servicos/servicoMensagemSessao.php";
   include "servicos/servicosValidacao.php";
   include "servicos/servicoCategoriaCompetidor.php";
    
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];

  defineCategoriaCompetidor($nome, $idade);

  header(string, 'location: index.php');