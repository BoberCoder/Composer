<?php

ini_set('error_reporting',0);
ini_set('display_errors',0);
ini_set('display_startup_errors',0);

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$timelog = new Logger("TimeLog");
$timelog->pushHandler(new StreamHandler('logs/sort.log', Logger::INFO));

const n = 5000;

//створюємо масив із випадкових чисел
for ($i = 0; $i<=n; $i++){
    $A[$i] = rand(0,100);
}

//запускаємо таймер
PHP_Timer::start();

//сортуємо масив
for ($i=0;$i<=n;$i++) {
    for ($j=0;$j<=n-$i;$j++) {
        if ($A[$j]>$A[$j+1]) {
            $key = $A[$j];
            $A[$j] = $A[$j+1];
            $A[$j+1] = $key;
        }
    }
}

//зупиняємо таймер і виводимо час виконання сортування
$time = PHP_Timer::stop();
print "Час виконання сортування : ".PHP_Timer::secondsToTimeString($time);

//записуємо в лог час виконання сортування
$timelog->addInfo("Час виконання сортування : ".PHP_Timer::secondsToTimeString($time));

?>
