<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
  $categorias = [];
  $categorias[] = 'infantil';
  $categorias[] = 'adolescente';
  $categorias[] = 'adulto';
  if(validaNome($nome) && validaIdade($idade))
    {
      removerMensagemErro();
      if ($idade >= 0 && $idade <=12) 
      {
        for ($i=0; $i < count($categorias); $i++) 
        {
          if ($categorias[$i] == 'infantil')  
          {
          setarMensagemSucesso( "O nadador(a) " ,$nome, " compete na categoria infantil", $categorias);
          return null;
          }
        }
      }

    elseif ($idade >= 13 && $idade <=17) 
    {
      for ($i=0; $i < count($categorias); $i++) 
        {
          if ($categorias[$i] == 'adolescente')  
          {
          setarMensagemSucesso( "O nadador(a) " ,$nome, " compete na categoria adolescente", $categorias);
          return null;
          }
        }
    }

    else 
    {
      for ($i=0; $i < count($categorias); $i++) 
      {
          if ($categorias[$i] == 'adulto') 
        {
        setarMensagemSucesso( "Nadador(a) " ,$nome, " compete na categoria adulto");
        return null;
        }
      }
    }
  }
  else
  {
      removerMensagemSucesso();
      return obterMensagemErro();
  }
}  