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
    
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];

  // var_dump($nome);
  // var_dump($idade);
  // return 0;

  if (empty($nome)) {
    echo 'O nome não pode ser vazio';
    return;
  }

  if (strlen($nome) < 3) {
    echo 'O nome deve conter mais de 3 caracteres';
    return;
  }

  if (strlen($nome) > 40) {
    echo 'O nome é muito extenso';
    return;
  }

  if (!is_numeric($idade)) {
    echo 'informe um número para idade';
    return;
  }


if ($idade >= 6 && $idade <=12) {
    for ($i=0; $i < count($categorias); $i++) {
            if ($categorias[$i] == 'infantil')  {
      echo "Nadador(a) " ,$nome, " compete na categoria infantil";
      }
    }
  }

elseif ($idade >= 13 && $idade <=18) {
    for ($i=0; $i < count($categorias); $i++) {
      if ($categorias[$i] == 'adolescente')  {
    echo "Nadador(a) " ,$nome, " compete na categoria adolescente";
    }
  }
}

else {
  for ($i=0; $i < count($categorias); $i++) {
    if ($categorias[$i] == 'adulto')  {
  echo "Nadador(a) " ,$nome, " compete na categoria adulto";
   }
  }
}

?>