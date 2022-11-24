<?php

$key = 'sort';
$sort = SORT_ASC;

function arraySort(array $array, $key, $sort)
{
    usort($array, function ($a, $b) use ($sort, $key) {
        return $sort == SORT_DESC ? $b[$key] <=> $a[$key] : $a[$key] <=> $b[$key];
    });
    return $array;
}
