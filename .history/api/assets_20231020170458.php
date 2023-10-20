<?php

$file = $_GET['assets'];
if (str_ends_with($file, '.css')) {
    header("Content-type: text/css; charset: UTF-8");
    return require '/var/task/user/public/build/assets/' . basename($file);
} else if (str_ends_with($file, '.js')) {
    header('Content-Type: application/javascript; charset: UTF-8');
    return require '/var/task/user/public/build/assets/' . basename($file);
}