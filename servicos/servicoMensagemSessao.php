<?php


session_start();

//Setar mensagem erro

function setarMensagemErro(string $mensagem): void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMEnsagemErro(): ?string
{
    if (isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];
    return null;
}

// setar mensagens de sucesso

function setarMensagemSucesso(string $mensagem): void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMEnsagemSucesso(): ?string
{
    if (isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];
    return null;
}

// remover mensagem


function removerMensagemSucesso() : void
{
    if(isset($_SESSION['mensagem-de-sucesso']));
        unset($_SESSION['mensagem-de-sucesso']);
}

function removerMensagemErro() : void
{
    if(isset($_SESSION['mensagem-de-erro']))
        unset($_SESSION['mensagem-de-erro']);

}
