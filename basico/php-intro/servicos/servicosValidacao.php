<?php

function validaNome(string $nome) : bool
{
  if (empty($nome)) 
  {
    setarMesagemErro(mensagem, 'O nome não pode ser vazio, por favor preencha-o novamente');
    return false;
  }

  else if (strlen($nome) < 3) 
  {
    setarMesagemErro(mensagem, 'O nome não pode conter menos de três caracteres');
    return false;
  }

  else if (strlen($nome) > 40) 
  {
    setarMesagemErro(mensagem, 'O nome não pode conter mais de 40 caracteres');
    return false;
  }
  return true;
}

function validaIdade(string $idade): bool
{
  if (!is_numeric($idade))
  {
    setarMensagemErro(mesangem,'Informe um número da idade');
    return false;
  }
  return true;
}




