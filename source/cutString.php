<?php

$length = 12;
$appends = '...';
$width = 0;

function cutString($line, $width, $length, $appends)
{
    $cutLine = mb_substr($line, $width, $length) . $appends;
    return $cutLine;
}
