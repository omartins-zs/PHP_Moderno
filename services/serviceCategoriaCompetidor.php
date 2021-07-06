<?php

function defineCategoriaCompetidor(string $nome, string $idade): ?string
{

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';
    if (validaNome($nome) && validaIdade($idade)) {
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'Infantil') {
                    setarMensagemSucesso("O Nadador "  .  $nome .  " compete na categoria  " .  $categorias[$i]);
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'Adolescentes') {
                    setarMensagemSucesso("O Nadador " .  $nome .  " compete na categoria "  .  $categorias[$i]);
                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'Adulto') {
                    setarMensagemSucesso("O Nadador " . $nome .  " compete na categoria "  .  $categorias[$i]);
                    return null;
                }
            }
        }
    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
