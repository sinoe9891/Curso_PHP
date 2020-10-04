<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('dvelasquez@platzi.com'));
echo '<br>';
var_dump(App\Validate::url('https://platzi.com'));
echo '<br>';
var_dump(App\Validate::password('12345'));
