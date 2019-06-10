<?php
/**
* Aplica uma máscara de forma dinâmica
* Retirado de https://pt.stackoverflow.com/questions/25651/tem-como-colocar-mascara-em-php-dinamicamente
*/
function mask(string $mask, string $value)
{
    $string = str_replace(' ', '', $value);

    for ($index = 0, $length = strlen($string); $index < $length; $index++) {
        $mask[strpos($mask, '#')] = $string[$index];
    }

    return $mask;
}
