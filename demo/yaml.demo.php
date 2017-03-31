<?php

include_once('../vendor/autoload.php');

use Symfony\Component\Yaml\Yaml;

$array = [
    'imie' => 'Jacus',
    'nazwisko' => 'Placus',
    'rejestruj-na' => [
        [
            'tag' => 'SEMX2015',
            'takczynie' => 'tak'
        ],
        [
            'tag' => 'SEMXI2015',
            'takczynie' => 'nie'
        ]
    ]
];

// print_r($array);

$string = Yaml::dump($array);

// var_dump($string);

print_r($string);