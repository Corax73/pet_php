<?php

function templateInclude($pathTemplate, $data = [])
{
    extract($data);

    include $_SERVER['DOCUMENT_ROOT'] . '/templates/' . ltrim($pathTemplate, '/');
}
