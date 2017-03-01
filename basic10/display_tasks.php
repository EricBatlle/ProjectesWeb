<?php

 $file = file_get_contents( __DIR__ . "/todolist.txt" );
 $tasques = explode("-", $file);
 $num_tasques = count($tasques);
 for ($i = 0; $i < $num_tasques; $i++) {
     echo "Tasca: " . $tasques[$i] . "\n";
 }