<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('emergency-1d521-firebase-adminsdk-8xjhz-30ee7bd4bd.json')
    ->withDatabaseUri('https://emergency-1d521-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();




?>