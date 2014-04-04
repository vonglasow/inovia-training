<?php

require 'vendor/autoload.php';

echo 'PHP 5.5 require to works correctly' . PHP_EOL;

echo 'their values are available for autocomplete' . PHP_EOL;

$autocomplete = array(
    'hoa',
    'console',
    'readline',
    'password',
    'awesome',
    'inovia',
    'git status',
    'pierre is the ???',,
    'INTEGRAAAAA HAIREUUUBROUKE SAYYYNAGUÉÉÉÉ HÉLLEUUUUUSINNNNEEEUUUGEUUUU'
);

print_r($autocomplete);

$rl = new Hoa\Console\Readline\Readline();
$rl->setAutocompleter(new Hoa\Console\Readline\Autocompleter\Word($autocomplete));
var_dump($rl->readLine('> '));
