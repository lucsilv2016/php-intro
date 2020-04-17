<!-- Crie um projeto em PHP para uma competição de natação,
 o sistema deverá permitir a inserção de competidores com seu nome
  e idade, e o sistema deverá identificar em qual categoria o nadador 
  irá competir, por exemplo, 6 a 12 anos categoria infantil, 
   13 a 18 categoria adolescente,
   acima de 18 categoria adulto, o sistema deverá retornar a 
   categoria para cada nadador que for cadastrado  -->

   <?php
   
   $categorias = [];
   $categorias[] = 'infantil';
   $categorias[] = 'adolescente';
   $categorias[] = 'adulto';
  //  $categorias[] = 'idoso';

   //print_r($categorias);
    
  $nome = 'Luciano';
  $idade = 19;

  // var_dump($nome);
  // var_dump($idade);

if ($idade >= 6 && $idade <=12) {
    for ($i=0; $i < count($categorias); $i++) {
            if ($categorias[$i] == 'infantil')  {
      echo "o nadador " ,$nome, " compete na categoria infantil";
      }
    }
  }

elseif ($idade >= 13 && $idade <=18) {
    for ($i=0; $i < count($categorias); $i++) {
      if ($categorias[$i] == 'adolescente')  {
    echo "o nadador " ,$nome, " compete na categoria adolescente";
    }
  }
}

else {
  for ($i=0; $i < count($categorias); $i++) {
    if ($categorias[$i] == 'adulto')  {
  echo "o nadador " ,$nome, " compete na categoria adulto";
   }
  }
}

?>