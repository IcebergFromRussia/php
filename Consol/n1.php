<?php
/**
 * Created by PhpStorm.
 * User: albert
 */

for ( $i=0; $i< $argv[1];$i++){
    for ( $j=0; $j< $argv[1];$j++){
        echo $i*$j;
        echo "\t";

    }
    echo "\n";
}