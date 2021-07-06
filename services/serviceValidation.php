<?php
function validaNome(string $nome): bool
{
    if (empty($nome)) {
        setarMensagemErro('O nome nao pode ser vazio, por favor preencha com seus dados');
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro('O nome deve conter mais de 3 caracteres');
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro('O nome e muito extenso');
        return false;
    }
    return true;
}
function validaIdade(string $idade): bool
{
    if (!is_numeric($idade)) {
        setarMensagemErro('Informe um numero para a sua idade');
        return false;
    }
    return true;
}
