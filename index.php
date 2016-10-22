<?php

ini_set('error_reporting',0);
ini_set('display_errors',0);
ini_set('display_startup_errors',0);


const n = 5000;

for ($i = 0; $i<=n; $i++){
    $A[$i] = rand(0,100);
}

for ($i=0;$i<=100;$i++) {
    for ($j=0;$j<=100-$i;$j++) {
        if ($A[$j]>$A[$j+1]) {
            $key = $A[$j];
            $A[$j] = $A[$j+1];
            $A[$j+1] = $key;
        }
    }
}

for ($i = 0; $i<=100; $i++) {
    echo $A[$i].' ';
}


?>
