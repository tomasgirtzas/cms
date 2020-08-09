<?php

/* Autoloader */
$autoloader_path = dirname(__FILE__) . '/../vendor/autoload.php';

if (!is_file($autoloader_path)) {
    die("Autoloader does not exists. Please run 'composer update' in cms base directory.");
}
