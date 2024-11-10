<?php
    use TECWEB\MYAPI\Read;
    include_once __DIR__.'/vendor/autoload.php';
    $prod = new Read('marketzone');
    $prod -> search($_GET['search']);
    echo $prod->getData();
?>