<?php

session_start();

function setMesagemSucesso(string $mensagem): void
{
  $_SESSION['mensagem de sucesso'] = $mensagem;
}

function obterMensagemsucesso() : ?string
{
  if ($_SESSION['mensagem de sucesso']) {
    return $_SESSION['mensagem de sucesso'];
  }
  return null;
}


function setMesagemErro(string $mensagem): void
{
  $_SESSION['mensagem de erro'] = $mensagem;
}

function obterMensagemErro() : ?string
{
  if ($_SESSION['mensagem de erro']) {
    return $_SESSION['mensagem de erro'];
  }
  return null;
}

function removerMensagemsucesso()
{
  if (isset($_SESSION['mensagem de sucesso'])) {
    unset($_SESSION['mensagem de sucesso']);
  }
}

function removerMensagemErro()
{
  if (isset($_SESSION['mensagem de erro'])) {
    unset($_SESSION['mensagem de erro']);
  }
}
