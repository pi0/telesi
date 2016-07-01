<?php

global $dotenv;
$dotenv = new Dotenv\Dotenv(__DIR__.'/..');
$dotenv->load();

function env($key, $default = null)
{
    $r = getenv($key);
    return $r ?: $default;
}