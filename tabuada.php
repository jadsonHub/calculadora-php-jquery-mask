<?php

function getPost($campo)
{

    return filter_input(INPUT_POST, $campo);
}

function initTabuada($op, $num1, $num2)
{

    switch ($op) {
        case 'mult':
            return  mult($num1, $num2);
            break;
        case 'soma':
            return soma($num1, $num2);
            break;
        case 'sub':
            return  sub($num1, $num2);
            break;
        case 'div':
            return  div($num1, $num2);
            break;
        case 'atv':
            return atv($num1,$num2);
            break;
        default:
            return 'Opção não encontrada!, por favor seleciona uma operação! :| ';
            break;
    }
}

function soma($num1, $num2)
{

    return $num1 + $num2;
}

function sub($num1, $num2)
{

    return $num1 - $num2;
}
function div($num1, $num2)
{

    if ($num2 != 0) {
        return $num1 / $num2;
    }
    return "Não pode dividir por zero cara!";
}
function mult($num1, $num2)
{
    return $num1 * $num2;
}

function stringOrNumber($valor)
{

    if (is_string($valor)) {
        return $valor;
    }
    return number_format($valor, 2, '.', ',');
}

function atv($num1, $num2)
{
    return mult(soma($num1, $num2), $num1);
}
