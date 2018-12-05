<?php

function selection_sort( array $array )
{
    $temp = $array;

    for ( $i = 0; $i < sizeof($temp); $i++ ) {
        for ( $j = 0; $j < sizeof($temp); $j++ ) {
            if ( $temp[$i] < $temp[$j] ) {
                $tempI = $temp[$i];
                $tempJ = $temp[$j];
                
                $temp[$i] = $tempJ;
                $temp[$j] = $tempI;
            }
        }

    }

    return array_values($temp);
}


$arr = [ 5, 7, 2, 3, 8, 10 ];

print_r( selection_sort($arr) );
